<div class="switcher">
    <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            {{ ucfirst($currentVersion) }}
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            @foreach ($versions as $key => $display)
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{ url('docs/' . $currentLanguage . '/' . $key . $currentSection) }}">{{ $display }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="switcher">
    <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
            {{ ucfirst($currentLanguage) }}
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
            @foreach ($languages as $key => $display)
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{ url('docs/'. $key . '/' . $currentVersion . $currentSection) }}">{{ $display }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>