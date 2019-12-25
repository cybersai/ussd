<?php

namespace Cybersai\Tests\Requests;

use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Requests\UssdRequest;
use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;
use PHPUnit\Framework\TestCase;

class UssdRequestTest extends TestCase
{
    protected $request;
    protected $view;
    protected $view2;
    protected $view3;

    function setUp(): void
    {
        $this->request = new UssdRequest('1234', '233234567890', 'MTN', '*365#');
        $this->view = new IAmSimpleView($this->request);
        $this->view2 = $view2 = new class($this->request) extends TemplateView {
            use SimpleSingleView;
            public function __construct($request)
            {
                $this->content = 'I am the second';
                parent::__construct($request);
            }
        };
        $this->view3 = $view2 = new class($this->request) extends TemplateView {
            use SimpleSingleView;
            public function __construct($request)
            {
                $this->content = 'I am the last';
                parent::__construct($request);
            }
        };
    }

    /** @test */
    function it_can_increment_page_number()
    {
        $this->request->incrementPageNumber();
        $this->assertEquals(2, $this->request->getPage());
    }

    /** @test */
    function it_can_decrement_page_number()
    {
        $this->request->incrementPageNumber();
        $this->request->incrementPageNumber();
        $this->request->decrementPageNumber();
        $this->assertEquals(2, $this->request->getPage());
    }

    /** @test */
    function it_can_reset_page_number()
    {
        $this->request->incrementPageNumber();
        $this->request->incrementPageNumber();
        $this->request->resetPageNumber();
        $this->assertEquals(1, $this->request->getPage());
    }

    /** @test */
    function it_can_serialize_it_self()
    {
        $string_request = $this->request->snapshotHistory();
        $this->assertIsString($string_request);
    }

    /** @test */
    function it_can_un_serialize_it_self()
    {
        $string_request = $this->request->snapshotHistory();
        $request = UssdRequest::createFromSnapshot($string_request);
        $this->assertIsObject($request);
        $this->assertInstanceOf(UssdRequest::class, $request);
    }

    /** @test */
    function it_can_add_history()
    {
        $view = new IAmSimpleView($this->request);
        $this->request->addHistory($view, '*365#');
        $this->assertCount(1, $this->request->getHistory());
    }

    /** @test */
    function it_can_add_new_parameter()
    {
        $this->request->addParameter('name', 'Isaac');
        $this->assertCount(1, $this->request->getPayload());
    }

    /** @test */
    function it_can_retrieve_parameter()
    {
        $this->request->addParameter('name', 'Isaac');
        $this->assertCount(1, $this->request->getPayload());
        $this->assertEquals('Isaac', $this->request->getParameter('name'));
    }

    /** @test */
    function it_can_get_the_last_input_and_view_in_history()
    {
        $this->request->addHistory($this->view, '*365#');
        $this->request->addHistory($this->view2, '2');
        $this->request->addHistory($this->view3, '4');
        $this->assertEquals('I am the last', $this->request->getLastView()->parseToString());
        $this->assertEquals('4', $this->request->getLastInput());
    }

    /** @test */
    function it_can_go_back_in_history()
    {
        $this->request->addHistory($this->view, '*365#');
        $this->request->addHistory($this->view2, '2');
        $this->request->addHistory($this->view3, '4');
        $this->request->processBack();
        $this->assertEquals('I am the second', $this->request->getLastView()->parseToString());
        $this->assertCount(2, $this->request->getHistory());
    }

    /** @test */
    function it_can_go_to_the_beginning_in_history()
    {
        $this->request->addHistory($this->view, '*365#');
        $this->request->addHistory($this->view2, '2');
        $this->request->addHistory($this->view3, '4');
        $this->request->processBeginning();
        $this->assertEquals('I am simple', $this->request->getLastView()->parseToString());
        $this->assertCount(1, $this->request->getHistory());
    }

    /** @test */
    function it_can_go_to_the_next_page_of_the_same_menu()
    {
        $this->request->incrementPageNumber();
        $this->request->addHistory($this->view, '*365#');
        $this->request->addHistory($this->view2, '2');
        $this->request->addHistory($this->view3, '4');
        $this->request->processNext();
        $this->assertEquals('I am the last', $this->request->getLastView()->parseToString());
        $this->assertCount(3, $this->request->getHistory());
        $this->assertEquals(3, $this->request->getPage());
    }

    /** @test */
    function it_can_go_to_the_previous_page_of_the_same_menu()
    {
        $this->request->incrementPageNumber();
        $this->request->addHistory($this->view, '*365#');
        $this->request->addHistory($this->view2, '2');
        $this->request->addHistory($this->view3, '4');
        $this->request->processPrevious();
        $this->assertEquals('I am the last', $this->request->getLastView()->parseToString());
        $this->assertCount(3, $this->request->getHistory());
        $this->assertEquals(1, $this->request->getPage());
    }
}
