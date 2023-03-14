<?php declare(strict_types=1);

namespace PHPSkeleton\App;

use DH\Essentials\EasyTemplate;

class BookStore {

    private EasyTemplate $template;

    public function __construct()
    {
        $this->template = new EasyTemplate(__DIR__ . "/BookStore.html");
    }

    public function render()
    {
        return $this->template->parse();
    }
}