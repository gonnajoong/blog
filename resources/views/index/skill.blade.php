<article class="gj-main-layout gj-skill">
    <h2>언어</h2>
    <ul class="gj-grid-wrap">
        @foreach($skills['skill'] as $key=>$skills)
            <li>
                <span class="gj-grid-list">
                    <img src="{{$skills['src']}}" alt="언어-아이콘"/>
                    <p>{{$skills['name']}}</p>
                </span>
            </li>
        @endforeach
    </ul>
</article>
