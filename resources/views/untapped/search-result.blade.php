<ul class="list-group">
    @if($beers->count() > 0)
        @foreach ($beers as $beer)
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            @if(isset($beer->beer->beer_label) && $beer->beer->beer_label)
                                <img src="{{$beer->beer->beer_label}}" alt="{{$beer->beer->beer_name}}"
                                     style="height: 75px;">
                            @endif
                        </div>
                        <div class="col-sm-7">
                            <span class="font-weight-bold">{{$beer->brewery->brewery_name . ' - ' . $beer->beer->beer_name}}</span>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-success add-beer" data-name="{{$beer->beer->beer_name}}" data-image="{{$beer->beer->beer_label}}" data-id="{{$beer->beer->bid}}">
                                Kiezen
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @else
        <li class="list-group-item">
            <i>Er zijn geen bieren gevonden</i>
        </li>
    @endif
</ul>

<script>
    $(function () {
        $('.add-beer').off('click').click(function () {
            let beer = '<li class="list-group-item">';
            beer += '<span><img style="width: 50px; height: 50px; margin-right: 20px;" src="' + $(this).attr('data-image') + '" alt=""></span>';
            beer += '<span>' + $(this).attr('data-name') + '</span>';
            beer += '<input type="hidden" name="beers[]" value="' + $(this).attr('data-id') + '" />';
            beer += '</li>';
            $('#beers').append(beer);
            return false;
        });
    })
</script>