$('.similar').on('click', findSimilarArticles);

function findSimilarArticles(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    let parent = e.target.parentNode.parentNode;
    let theme = parent.querySelector('.similar').textContent;
    let subjectTheme = '';

    switch (theme) {
        case 'политика':
            subjectTheme = 'policy';
            break;
        case 'наука':
            subjectTheme = 'science';
            break;
    }

    $.ajax({
        url: '/similar',
        method: 'post',
        dataType: 'html',
        data: {text: subjectTheme},
        success: function(data){
            $('html').html(data);
        }
    });
}
