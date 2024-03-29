@extends ('questions/layout')

<?php var_dump($answers);?>

@section ('content')
<section id="banner" class="banner-sm">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>
<?php foreach ($questions as $question):?> 
    <section id="question">
        <div class="container">
            <div class="question-left">
                <div class="user-avatar">
                    <img class="img-fluid"
                         src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">John Doe</div>
                <div class="user-stats">
                    <div class="user-stat">
                        <span>3</span>
                        <label>responses</label>
                    </div>
                    <div class="user-stat">
                        <span>5</span>
                        <label>votes</label>
                    </div>
                </div>
    
            </div>
            <div class="question-right">
            <h2>{{$question->title}}</h2>
                <p>{{$question->text}}</p>
            </div>
        </div>
    </section>

    
    <section id="answers">

        <div class="container">
            <h2>12 Answers</h2>
            <?php foreach ($answers as $answer):?>
            <?php if($answer->question_id == $question->id) :?>
            <div class="answer">
                <div class="answer-left">
                    <div class="user-avatar">
                        <img class="img-fluid"
                             src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                    </div>
                    <div class="user-name">John Doe</div>
                    <div class="user-stats">
                        <div class="user-stat">
                            <span>3</span>
                            <label>responses</label>
                        </div>
                        <div class="user-stat">
                            <span>5</span>
                            <label>votes</label>
                        </div>
                    </div>
                </div>
                <div class="answer-right">
                    <p>{{$answer->text}}</p>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach ?>
        </div>

    </section>
    

<?php endforeach;?> 

@endsection