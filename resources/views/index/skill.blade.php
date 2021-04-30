<article class="gj-main-layout gj-skill">
    <h2 data-aos="fade-up">언어</h2>
    <ul class="gj-grid-wrap">
        @foreach($skills['skill'] as $key=>$skills)
            <li data-aos="fade-up" data-aos-delay="150">
                <span class="gj-grid-list">
                    <img src="{{$skills['src']}}" alt="언어-아이콘"/>
                    <p>{{$skills['name']}}</p>
                </span>
            </li>
        @endforeach
    </ul>
</article>
