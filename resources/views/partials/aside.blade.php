<!-- price & service -->

    <div class="container_aside">
        <!-- Pack 1-->
        <div class="col-md-3" id="home-box">
            <div class="pricing_header">
                <h2>Categorias</h2>
                <div class="space"></div>
            </div>
            <div class="list-group">

                    @foreach($categories as $category)

                               <li class="list-group-item"><span class="badge">{{$category->articles->count()}}</span>
                                <a href="{{route('front.search.category', $category->name)}}">{{$category ->name}}</a>
                               </li>


                    @endforeach


            </div>

        </div>


    </div>

<div>
    <div class="container_aside">
        <!-- Pack 1-->
        <div class="col-md-3" id="home-box">
            <div class="pricing_header">
                <h2>Tags</h2>
                <div class="space"></div>
            </div>
            <div class="list-group">

                @foreach($tags as $tag)

                    <li class="list-group-item">
                        <a href="{{route('front.search.tags', $tag->name)}}">{{$tag ->name}}</a>
                    </li>


                @endforeach


            </div>

        </div>


    </div>
</div>

<!-- /.container -->