<?php

class Post
{
    protected $title;
    protected $content;
    protected $author;

    public function __construct(string  $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * Retrieve the Post Title
     * @return string
     */
    public function get_post_title()
    {
        return $this->title;
    }

    /**
     * Set the Post Title
     * @param string $title
     * @return void
     */
    public function set_post_title(string $title)
    {
        $this->title = $title;
    }


    /**
     * Output Post Title
     * @return void
     */
    public function the_post_title()
    {
        echo self::get_post_title();
    }


    /**
     * Retrieve the Post Content
     * @return string
     */
    public function get_post_content()
    {
        return $this->content;
    }


    /**
     * Set the Post Content
     * @param string $content
     * @return void
     */
    public function set_post_content(string $content){
        $this->content=$content;
    }

    /**
     * Output Post Content
     * @return void
     */
    public function the_post_content(){
        echo $this->content;
    }
}
