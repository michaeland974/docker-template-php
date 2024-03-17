<?php declare(strict_types = 1);

  class View{
    private readonly array $view_data;
    public string $stylesheet_path;
  
    function __construct(array $view_data, string $stylesheet_path) {
      $this->view_data = $view_data;
      $this->stylesheet_path = $stylesheet_path;
    }

    function get_title(): string{
      return $this->view_data['title'];
    }
    
    function get_content(): string{
      return $this->view_data['content'];
    }
  }
  
?>