<div class="col-md-3 col-sm-4 photo item">
    <div class="panel panel-default">
      <div class="panel-body">
        <img class="img-responsive" src="{{ $photo->src }}">
        <p class="photo-name">{{ $photo->name }}</p>
        @if($photo->intro == '')
        	<p class="photo-intro">no introduction ..</p>
        @else
        	<p class="photo-intro">{{ $photo->intro }}</p>
        @endif

        <!-- edit photo : alert button -->
        <span class="glyphicon glyphicon-cog photo-conf"></span>
      </div>
    </div>
</div>