@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://asg2.duckdns.org/pblogo.png" class="logo" alt "pblogo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

