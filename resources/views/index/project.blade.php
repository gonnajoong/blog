<article class="gj-main-layout gj-blog" id="gjBlog">
    <h1 data-aos="fade-up">참여 프로젝트</h1>
    <ul class="gj-project-icon-list">
        @foreach($projects['project'] as $key=>$projects)
            <li data-aos="fade-up" data-aos-delay="150">
                <a href="{{$projects['page']}}">
                    <span>
                        <img src="{{$projects['src']}}" alt="프로젝트 이미지, 아이콘"/>
                        <p>{!! $projects['project_name'] !!}</p>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</article>
