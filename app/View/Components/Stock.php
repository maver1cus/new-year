<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stock extends Component
{
  public $old_price;
  public $price;
  public $date;
  public $caption;
  public $article;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($oldPrice, $price, $date, $caption, $article)
    {
        $this->old_price = $oldPrice;
        $this->price = $price;
        $this->date = $date;
        $this->caption = $caption;
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stock');
    }
}
