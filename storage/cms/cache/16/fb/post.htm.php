<?php 
class Cms5a5233225d431870068034_33633f99e6c13c8d3f1a1d68a60cc3ccClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
