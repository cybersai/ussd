<?php

namespace Cybersai\Tests\Router;

use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Router\UssdRouterConfig;
use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;
use PHPUnit\Framework\TestCase;

class UssdRouterConfigTest extends TestCase
{
    protected $view;
    protected $view2;
    function setUp(): void
    {
        $this->view = new IAmSimpleView([]);
        $this->view2 = $view2 = new class([]) extends TemplateView {
            use SimpleSingleView;
            public function __construct($request)
            {
                $this->content = 'I am the second';
                parent::__construct($request);
            }
        };
    }

    function it_returns_false_for_all_when_default()
    {
        $config = new UssdRouterConfig();
        $this->assertFalse($config->goBackEnabledFor($this->view, '#'));
        $this->assertFalse($config->goBackEnabledFor($this->view2, '#'));
        $this->assertFalse($config->goToBeginningEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToBeginningEnabledFor($this->view2, '#'));
        $this->assertFalse($config->goToListNextPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListNextPageEnabledFor($this->view2, '#'));
        $this->assertFalse($config->goToListPreviousPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListPreviousPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_back_on_all_pages_when_the_right_key_is_selected_and_option_is_all()
    {
        $config = new UssdRouterConfig(['#' => UssdRouterConfig::ALL]);
        $this->assertTrue($config->goBackEnabledFor($this->view, '#'));
        $this->assertTrue($config->goBackEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_false_for_go_back_on_all_pages_option_is_none()
    {
        $config = new UssdRouterConfig(['#' => UssdRouterConfig::NONE]);
        $this->assertFalse($config->goBackEnabledFor($this->view, '#'));
        $this->assertFalse($config->goBackEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_back_on_specific_page_when_the_right_key_is_selected_and_view_is_in_the_array()
    {
        $config = new UssdRouterConfig(['#' => [IAmSimpleView::class]]);
        $this->assertTrue($config->goBackEnabledFor($this->view, '#'));
        $this->assertFalse($config->goBackEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_to_beginning_on_all_pages_when_the_right_key_is_selected_and_option_is_all()
    {
        $config = new UssdRouterConfig(null, ['#' => UssdRouterConfig::ALL]);
        $this->assertTrue($config->goToBeginningEnabledFor($this->view, '#'));
        $this->assertTrue($config->goToBeginningEnabledFor($this->view2, '#'));
    }

    function it_returns_false_for_go_to_beginning_on_all_pages_when_option_is_none()
    {
        $config = new UssdRouterConfig(null, ['#' => UssdRouterConfig::NONE]);
        $this->assertFalse($config->goToBeginningEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToBeginningEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_to_beginning_on_specific_page_when_the_right_key_is_selected_and_view_is_in_the_array()
    {
        $config = new UssdRouterConfig(null, ['#' => [IAmSimpleView::class]]);
        $this->assertTrue($config->goToBeginningEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToBeginningEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_to_next_page_on_all_pages_when_the_right_key_is_selected_and_option_is_all()
    {
        $config = new UssdRouterConfig(null, null, ['#' => UssdRouterConfig::ALL]);
        $this->assertTrue($config->goToListNextPageEnabledFor($this->view, '#'));
        $this->assertTrue($config->goToListNextPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_false_for_go_to_next_page_on_all_pages_when_option_is_none()
    {
        $config = new UssdRouterConfig(null, null, ['#' => UssdRouterConfig::NONE]);
        $this->assertFalse($config->goToListNextPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListNextPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_to_next_page_on_specific_page_when_the_right_key_is_selected_and_view_is_in_the_array()
    {
        $config = new UssdRouterConfig(null, null, ['#' => [IAmSimpleView::class]]);
        $this->assertTrue($config->goToListNextPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListNextPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_previous_page_on_all_pages_when_the_right_key_is_selected_and_option_is_all()
    {
        $config = new UssdRouterConfig(null, null, null,['#' => UssdRouterConfig::ALL]);
        $this->assertTrue($config->goToListPreviousPageEnabledFor($this->view, '#'));
        $this->assertTrue($config->goToListPreviousPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_false_for_go_previous_page_on_all_pages_when_option_is_none()
    {
        $config = new UssdRouterConfig(null, null, null,['#' => UssdRouterConfig::NONE]);
        $this->assertFalse($config->goToListPreviousPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListPreviousPageEnabledFor($this->view2, '#'));
    }

    /** @test */
    function it_returns_true_for_go_previous_page_on_specific_page_when_the_right_key_is_selected_and_view_is_in_the_array()
    {
        $config = new UssdRouterConfig(null, null, null, ['#' => [IAmSimpleView::class]]);
        $this->assertTrue($config->goToListPreviousPageEnabledFor($this->view, '#'));
        $this->assertFalse($config->goToListPreviousPageEnabledFor($this->view2, '#'));
    }
}
