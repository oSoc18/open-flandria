

<h1>My Galleries</h1>
<div class="container">
<ul class="nav nav-tabs">        
        @foreach ($galleries as $gallery)

        <li class="nav-item">
        <a  id="{{$gallery->id}}"  href="/gallery/{{$gallery->id}}" >{{$gallery->name}} </a>&nbsp;&nbsp;&nbsp;&nbsp;
        </li>
    
    @endforeach

    <li class="active">
            <a  href="/galleries/create"><span class="glyphicon glyphicon-plus" aria-hidden="true">Add Gallery</span></a>
    </li>    
    @if ($galleries != null)
    <li>
                <a  href="/galleries/manage"><span class="glyphicon glyphicon-plus" aria-hidden="true">Manage my Galleries</span></a>
    </li>
    @endif
        
        </ul>
</div>



</ul>
