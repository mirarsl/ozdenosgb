 @foreach($items as $menu_item)
 <div class="col-sm-2">
  <p class="title">{{$menu_item->title}}</p>
  <ul>
   @foreach ($menu_item->children as $item)
   <li><a href='{{ $item->link() }}'>{{$item->title}}</a></li>
   @endforeach
  </ul>
 </div>
 @endforeach