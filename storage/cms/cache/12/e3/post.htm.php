<?php 
class Cms5a52d78e2111a810390902_b266997467f2a867f1a2147ae2156acfClass extends \Cms\Classes\PageCode
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
