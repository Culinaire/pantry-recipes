<?php

namespace App\Services;

class ReadRecipeFromFile
{
  protected $name;
  protected $contents;

  public function __construct($file)
  {
    $this->name = $this->filename($file);
    $this->contents = $this->read($file);
    //dump($this->fileinfo($file));
    //$data = $this->read($file);
    //$this->recipe = $this->recipe($data);
    //return $this->recipe;

  }

  public function name()
  {
    return $this->name;
  }

  public function contents()
  {
    return $this->contents;
  }

  public function recipe($data)
  {
    $recipe = new \StdClass();
    $recipe->name = $data['name'];

    return $recipe;
  }

  public function read($file)
  {
    $json = $this->getContents($file);
    $read = $this->readJson($json);
    return $read;
  }

  public function readJson($json)
  {
    return json_decode($json, true);
  }

  public function getContents($file)
  {
    return file_get_contents($file);
  }

  public function filename($file)
  {
    $info = new \SplFileInfo($file);
    $fileinfo = $info->getBaseName();

    return $fileinfo;
  }
}