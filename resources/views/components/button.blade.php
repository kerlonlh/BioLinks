 @props([
     'href' => null,
     'wide' => null,
     'primary' => null,
     'outline' => null,
     'info' => null,
     'ghost' => null,
     'soft' => null,
 ])

 @php
     $tag = $href ? 'a' : 'button';
 @endphp


 <{{ $tag }} {{ $href ? "href=$href" : '' }}
     {{ $attributes->class([
         'btn',
         'btn-wide' => $wide,
         'btn-primary' => $primary,
         'btn-outline' => $outline,
         'btn-info' => $info,
         'btn-ghost' => $ghost,
         'btn-soft' => $soft,
     ]) }}>
     {{ $slot }}
     </{{ $tag }}>
