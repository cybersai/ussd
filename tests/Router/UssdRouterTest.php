<?php

namespace Cybersai\Tests\Router;

use Cybersai\Tests\Helpers\IAmAView;
use Cybersai\Tests\Helpers\IAmAViewGroup;
use Cybersai\Tests\Helpers\IAmSimpleNestedViewGroup1;
use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Tests\Helpers\IAmSimpleViewGroup;
use Cybersai\Tests\Helpers\IAmSimpleViewValidator;
use Cybersai\Ussd\Exceptions\ViewNotFoundException;
use Cybersai\Ussd\Requests\UssdRequest;
use Cybersai\Ussd\Router\UssdRouter;
use Cybersai\Ussd\Router\UssdRouterConfig;
use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;
use Cybersai\Ussd\Templates\TemplateViewGroup;
use PHPUnit\Framework\TestCase;

class UssdRouterTest extends TestCase
{
    protected $request;
    protected $view;
    protected $view2;
    protected $router;

    function setUp(): void
    {
        $this->request = new UssdRequest('1234', '233234567890', 'MTN', '*365#');
        $this->router = new UssdRouter($this->request, new UssdRouterConfig());
    }

    /** @test */
    function it_returns_the_next_view_when_next_is_a_valid_view()
    {
        $view = (new IAmAView($this->request))->setNext(IAmSimpleView::class)
            ->setContent('I am the first');
        $view2 = new IAmSimpleView($this->request);
        $this->request->addHistory($view, '*365#');
        $next_view = $this->router->route(1);
        $this->assertEquals('I am simple', $next_view->parseToString());
    }

    /**
     * @test
     * @dataProvider provider
     * @param $input
     * @param $output
     * @throws ViewNotFoundException
     */
    function it_returns_the_next_view_when_next_is_a_valid_view_group($input, $output)
    {
        $view = (new IAmAView($this->request))->setContent('I am view')->setNext(IAmSimpleViewGroup::class);
        $this->request->addHistory($view, 1);
        $next = $this->router->route($input);
        $this->assertEquals($output, $next->parseToString());
    }

    /**
     * @test
     * @dataProvider provider
     * @param $input
     * @param $output
     * @throws ViewNotFoundException
     */
    function it_returns_the_next_view_when_next_is_a_valid_view_validator($input, $output)
    {
        $view = (new IAmAView($this->request))->setContent('I am view')->setNext(IAmSimpleViewValidator::class);
        $this->request->addHistory($view, 1);
        $next = $this->router->route($input);
        $this->assertEquals($output, $next->parseToString());
    }

    /**
     * @test
     * @dataProvider provideInvalidNext
     * @param $next
     * @throws ViewNotFoundException
     */
    function it_throws_an_exception_when_next_is_not_valid($next)
    {
        $this->expectException(ViewNotFoundException::class);
        $view = (new IAmAView($this->request))->setNext($next)->setContent('I am the first');
        $this->request->addHistory($view, 1);
        $next = $this->router->route(1);
    }

    /** @test */
    function views_can_be_nested()
    {
        $view = (new IAmAView($this->request))->setContent('I am view')->setNext(IAmSimpleNestedViewGroup1::class);
        $this->request->addHistory($view, 1);
        $next = $this->router->route(1);
        $this->assertEquals('I am nested child 2-1', $next->parseToString());
    }

    function provideInvalidNext()
    {
        return [
            [null],
            ['Cherry'],
            [1],
        ];
    }

    function provider()
    {
        return [
            [1, 'I am child 1'],
            [2, 'I am child 2'],
        ];
    }
}
