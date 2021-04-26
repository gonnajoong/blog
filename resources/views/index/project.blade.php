<article class="gj-main-layout gj-blog" id="gjBlog">
    <h1>참여 프로젝트</h1>
    <ul class="gj-project-icon-list">
        @foreach($projects['project'] as $key=>$projects)
            <li>
                <span>
                    <img src="#" alt="프로젝트 이미지, 아이콘"/>
                    <p>{{$projects['project_name']}}</p>
                    <span>담당 기간: {{$projects['contribution']}}</span>
                    <span>작성언어: {{$projects['making_lang']}}</span>
                    <span>서비스: {{$projects['is_operation']}}</span>
                    <span>담당 역할: {{$projects['role']}}</span>
                </span>
            </li>
        @endforeach
    </ul>
</article>
