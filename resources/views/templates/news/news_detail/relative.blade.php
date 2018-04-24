<section class="news-relative">
        <div class="container">
             <h4>Tin liên quan <span class="text-danger">*</span></h4>
             <ul class="list-unstyled list-news-relative">
                 @foreach($relativeNews as $item)
                 @if($item->id != $dataNews->id)
                 <li data-toogle="tooltip">
                     <a href="{{$item->slug}}" title="{{$item->title}}">{{$item->title}}</a>
                 </li>
                 @endif()              
                 @endforeach
             </ul>
        </div>
    </section>