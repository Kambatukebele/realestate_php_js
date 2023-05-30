<?php
class App
{
  private $controller = "home";
  private $method = "index";
  private $params = [];

  public function __construct()
  {
    $URL = $this->getUrl();

    $this->controller = $URL[0];

    $fileName = "../app/controllers/" . ucfirst($this->controller) . ".php";
    /**
     * |----------------------------------------------------------------
     * Checking if the file or page exists
     * |----------------------------------------------------------------
     */
    if (file_exists($fileName)) {
      require $fileName;
    } else {
      $this->controller = "_404";
      $fileName = "../app/controllers/" . $this->controller . ".php";
      require $fileName;
    }

    unset($URL[0]);
    $this->controller = new $this->controller();

    /**
     * |----------------------------------------------------------------
     * Checking if the method exists
     * |----------------------------------------------------------------
     */

    if (isset($URL[1])) {
      if (method_exists($this->controller, $URL[1])) {
        $this->method = $URL[1];
      }
    }

    unset($URL[1]);

    $this->params = isset($URL) ? $URL : ['home'];

    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  /**
   * The function getUrl helps to capture the URL with the super global variable $_GET
   *Once the URL is captured, we sanitize it and the turn it into an array index with the explode function and return the $url; 
   *
   * @return void
   */
  public function getUrl()
  {
    $url = isset($_GET['url']) ? filter_var($_GET['url'], FILTER_SANITIZE_URL) : "home";
    $url = explode("/", trim($url, "/"));
    return $url;
  }
}