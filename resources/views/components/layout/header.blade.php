<header class="page-header">
  <nav class="main-menu rev">
    <ul class="main-menu__list">
      @foreach($products as $product)
        <li class="main-menu__item">
          <a href="#{{$product->hash}}" class="main-menu__link">{{$product->title}}</a>
        </li>
      @endforeach
      <li class="main-menu__item"><a href="#contacts" class="main-menu__link">контакты</a></li>
    </ul>
  </nav>
</header>
