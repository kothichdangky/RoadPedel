@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://imgur.com/rLqQnJ8.png" class="logo w-100 img-fluid" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
