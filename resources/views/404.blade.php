<link href="{{ asset('public/css/404.css') }}" rel="stylesheet">
<script src="{{ asset('public/js/404.js') }}" ></script>

<p class="center">Space Invadors destroyed this page! Take revenge on them!
    <br>
    {{ $message ?? '' }}  {{ $errorCode ?? '404' }}
  <br/> Use <span class="label label-danger">Space</span> to shoot and <span class="label label-danger">←</span>&#160;<span class="label label-danger">→</span> to move!&#160;&#160;&#160;<button class="btn btn-default btn-xs" id="restart">Restart</button></p>

<canvas id="space-invaders"/>

