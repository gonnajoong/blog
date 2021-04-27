<article class="gj-main-layout gj-blog" id="gjBlog">
    <h1>참여 프로젝트</h1>
    <ul class="gj-project-icon-list">
        @foreach($projects['project'] as $key=>$projects)
            <li>
                <span>
                    <img src="{{$projects['src']}}" alt="프로젝트 이미지, 아이콘"/>
                    <p>{{$projects['project_name']}}</p>
                </span>
            </li>
        @endforeach
    </ul>
</article>
