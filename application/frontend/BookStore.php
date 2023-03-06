<?php declare(strict_types=1);

namespace PHPSkeleton\App;

use PHPSkeleton\Sources\Template;

class BookStore {

    private Template $template;

    public function __construct()
    {
        $this->template = new Template(__DIR__ . "/BookStore.html");
    }

    public function render()
    {
        return $this->template->parse();
    }
}