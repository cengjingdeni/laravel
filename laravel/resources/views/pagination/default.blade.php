<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 19:29
 */
?>
<div class="pagination">
    <ul>
        <li class="previous {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}" style="list-style-type:none;">
            <a href="{{ $paginator->url(1) }}" style="float: left;list-style-type:none;"><i class="chevron left icon"></i></a>
        </li>
@for ($i = 1; $i <= $paginator->lastPage(); $i++)
    <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}" style="list-style-type:none;display: inline-block">
        <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
    </li>
@endfor
<li class="next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}" style="list-style-type:none;">
    <a href="{{ $paginator->url($paginator->currentPage()+1) }}" style="float: left;list-style-type:none;">
        <i class="chevron right icon"></i>
    </a>
</li>
</ul>
</div>