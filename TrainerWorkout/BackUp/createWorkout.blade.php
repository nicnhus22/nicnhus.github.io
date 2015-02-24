@extends('layouts.trainer')

@section('content')
    <!-- content area starts here -->
<section id="content" class="clearfix">
   <div class="wrapper">

      <!-- First Content Block -->
      <div class="widgets fullwidthwidget shadow createcustomworkout">

         <!-- Step 1 -->
         <div class="steps" id="step1" style="display:block;padding-bottom:20px">
            <div>
               <h3>Step 1 <span>Select an option</span></h3>
               <div class="options">
                  <a href="javascript:void(0)" class="customworkout" onClick="step2();">Create Custom Workout</a> Or
                  <a href="/WorkoutMarket/" class="selectworkout">Select a Workout</a>
               </div>
            </div>
         </div>

         <!-- Step 2 -->
         <div class="steps" id="step2" style="margin-bottom:0 !important;">
            <h3>Step 2 <span>Name your workout</span></h3>
            <div class="nameworkout">
               <div class="addnameworkout">
                  <input id="pname" name="pname" type="text" class="nameworkoutinput input_padding" placeholder="Workout Name" value="" />
               </div>
            </div>
         </div>

         <a href="javascript:void(0)" id="nameWorkoutLink" class="greybtn" style="display:none" onClick="step3();">Next</a>
      </div>

      <!-- Second Content Block -->
      <div class="widgets fullwidthwidget shadow createcustomworkout steps" id="section2">
         <!-- Step 3 -->
         <div class="steps borderbtmnone" id="step3">
            <h3>Step 3 <span>Select your exercises</span></h3>
            
            <div class="additionalsearch">
               <span>You can search for muscle group, exercise name, or equipment</span>
               <div class="topsearch advsearch input_padding">
                  <form action="" method="get">
                     <input id="ex_name" name="ex_name" autocomplete="off" onKeyUp="searchExercise($(this), event); return false;" type="text"  value="eg. bicep, dumbbell" onblur="this.value=!this.value?'eg. bicep, dumbbell':this.value;" onfocus="this.select()" onclick="this.value='';"  class="srchinput">
                     <input name="body_group" autocomplete="off" type="hidden" onClick="searchExercise($(this), event); return false;" />
                     <button class="srchbutton orangebtn" type="button">
                     Search
                     </button>
                  </form>
               </div>
            </div>
            <div class="exercises" id="search_results"></div>
            <div class="exercises" id="selected_ex"></div>
         </div>
         <a href="javascript:void(0)" class="greybtn" id="selectExercisesLink" onClick="step5();">Next</a>
      </div>


      <div class="widgets fullwidthwidget shadow createcustomworkout steps" id="section3">
         <div class="steps step5 borderbtmnone clearfix" id="step5">
            <h3>Step 3 <span>Edit your exercises</span></h3>
            <div class="exercises clearfix">
               <div id="edit_exercises">
               </div>
               <div class="clearfix"></div>
               <a href="javascript:void(0)" onClick="editAll()" class="greybtn">Select All</a>
            </div>
            <div class="editwrapper clearfix" id="edit_details" style="display:none">
               <div class="editform">
                  <h4>Edit your exercise</h4>
                  <form id="normal">
                     <fieldset>
                        <label># of sets</label>
                        <input type="text" name="" id="ex_edit_sets" onchange="saveEdit()">
                     </fieldset>
                     <fieldset class="normal">
                        <label># of repetitions</label>
                        <input type="text" name="" id="ex_edit_reps" onchange="saveEdit()">
                        <input type="hidden" id="ex_edit_id" value=""/>
                        <input type="hidden" id="ex_edit_js_id" value=""/>
                        <input type="hidden" id="editAll" value="0" />
                     </fieldset>
                     <fieldset class="normal">
                        <div id="repsHolder" class="repsHolder">
                           <label>Set 1</label>
                           <input type="text" name="" id="" onchange="saveEdit()">
                           <label>Set 2</label>
                           <input type="text" name="" id="" onchange="saveEdit()">
                           <label>Set 3</label>
                           <input type="text" name="" id="" onchange="saveEdit()">
                        </div>
                     </fieldset>
                     <fieldset class="cardio">
                        <label>Time</label>
                        <input type="text" name="" id="ex_edit_time" onchange="saveEdit()"> min
                        <input type="hidden" id="ex_edit_id" value=""/>
                        <input type="hidden" id="ex_edit_js_id" value=""/>
                        <input type="hidden" id="editAll" value="0" />
                     </fieldset>
                     <fieldset class="cardio">
                        <label>Distance</label>
                        <input type="text" name="" id="ex_edit_distance" onchange="saveEdit()">
                     </fieldset>
                     <fieldset class="cardio">
                        <label>Speed</label>
                        <input type="text" name="" id="ex_edit_speed" onchange="saveEdit()">
                     </fieldset>
                     <fieldset class="cardio">
                        <label>HR</label>
                        <input type="text" name="" id="ex_edit_HR" onchange="saveEdit()">
                     </fieldset>
                     <fieldset>
                        <label>Notes</label>
                        <textarea id="ex_edit_notes" onchange="saveEdit()"></textarea>
                     </fieldset>
                     <!--<fieldset>
                        <label>technique</label>
                        <input type="text" name="" >
                        </fieldset>-->
                     <!-- <fieldset>
                        <input type="button" class="greybtn" value="Apply" onclick="saveEdit()">
                        </fieldset> -->
                  </form>
               </div>
               <div class="exercisesdetail"  id="edit_details2">
                  <span class="fltleft"></span>
                  <div class="pull marginleftnone">
                     <div class="exercisesimages">
                        <a href="#"><span id="ex_edit_name">Bench Press</span>
                        <img id="ex_edit_image" src="/Trainee/imgv2/createcustomworkout-img.jpg" alt="profile"></a>
                     </div>
                     <div class="mark" id="ex_edit_sets_reps">3x 10</div>
                  </div>
                  <span class="fltleft"></span>
                  <span class="fltleft result" id="ex_edit_sets_reps_desc"  style="width:150px">3 sets of <br>10 repetitions</span>
               </div>
            </div>
            <a href="javascript:void(0)" onClick="step6()" class="greybtn" style="margin-top:20px;" id="editExercisesLink">Next</a>
         </div>
      </div>
      <div class="widgets fullwidthwidget shadow createcustomworkout steps" id="section4">
         <div class="steps step6 borderbtmnone clearfix" id="step6">
            <h3>Step 4 <span>Order your exercises</span></h3>
            <div class="notedesc noselection">
               <article>Move the exercises to order them in the order you want them</article>
            </div>
            <div id="marginLeftOrder">
               <div class="ex_orderNumbers order" id="ex_orderNumbers"></div>
               <div class="ex_order" id="ex_order">
                  <ul id="orderList" class="orderList ui-sortable"></ul>
               </div>
            </div>
            <a style="margin-left:20px; margin-top:20px;" href="javascript:void(0)" class="greybtn" onClick="createWorkout();" id="createWorkoutLink">Create Workout</a> 
         </div>
         <form method="post" enctype="multipart/encode" action="/Trainer/CreateWorkout" id="createform">
            <input type="hidden" name="program" value="" />
            <input type="hidden" name="program_details" value="" />
            <input type='hidden' name='ispublic_market' value="1" />
            <input type='hidden' name='online_market' value="1" />
            <input type='hidden' name='price_market' value="" />
            <input type='hidden' name='descr_market' value="" />
         </form>
      </div>
   </div>
</section>
@endsection

@section('scripts')




<script type="text/javascript">

    var array_objectives = [];
    var count_objectives = 0;
    var globalExName = '';
    var selectedEx = new Object();
    var exs = [];
    var exsCount = 0;

    $(document).ready(function(){ 
      $("#m_workouts").addClass('active'); 

      @if(isset($client))
        step2();
        step3();
        for_client();
      @endif
    });

    $(document).ready(function(){
        $("#ex_name").keypress(function(e) {
            if(e.keyCode == 13) {
                e.preventDefault();
                searchExercise($(this),e);
            }
        });
    });

    function step2(){
        $("#step2").slideDown();
        $("#step1").addClass("steps_border_bottom");
        $("#nameWorkoutLink").slideDown();
        window.scrollTo(0,document.body.scrollHeight); 
    }
    
    function step3(){
        if( $("#pname").val() != "Workout Name" &&  $("#pname").val()  != ""){
          $("#section2").slideDown();
            $("#step3").slideDown();
        } else {
             errorMessage('Please enter a program name');     
        }
    }

     function step4(){
        $("#section2").slideDown();
        $("#step3").slideDown();
        window.scrollTo(0,document.body.scrollHeight); 
    }
    
    function step5(){
        $("#section3").slideDown();
        $("#step5").slideDown();
        editExercises();
        window.scrollTo(0,document.body.scrollHeight);   
    }
    
    function step6(){
        $("#section4").slideDown();
        $("#step6").slideDown();
        generateOrder();
        window.scrollTo(0,document.body.scrollHeight); 
    }

     function for_client(){
        
        $("#step8").slideDown();
        window.scrollTo(0,document.body.scrollHeight); 
        
            
    }
    
    function addObjective(){
        
         
        
        obj = {};
        
        output = "";
        
        objective = $("#objective").val();  
        measureable = $("#measureable").val();  
        datedeadline = $("#datedeadline").val();

        if(objective == ""){
            return errorMessage("To add an objective, you have to write down your objective");
        }    
        
        obj["objective"] = objective;
        obj["measureable"] = measureable;
        obj["datedeadline"] = datedeadline;
        
        array_objectives[count_objectives] = obj;
        count_objectives++;

        displayObjectives();
        
        $("#objective").val("");  
        $("#measureable").val("");  
        $("#datedeadline").val("");

    }

    function addNewClient(element){
        var handler = $(element);
        var preload = null;
        $.ajax(
                {
                    url : "/Trainer/addClientWithId",
                    type: "POST",
                    data: {firstName:$("#firstName").val(),lastName:$("#lastName").val(),email:$("#email").val()},
                    beforeSend:function() 
                    {
                                preLoad = showLoadWithElement(handler);
                    },
                    success:function(data, textStatus, jqXHR) 
                    {
                        $("#user").val(data["id"]);
                        successMessage(data["message"]);
                        $('.new').slideUp();
                        $("#searchclient").val($("#firstName").val()+" "+$("#lastName").val());

                        return false;

                    },
                    complete:function() 
                    {
                                hideLoadWithElement(preLoad);
                    },
                    error: function(jqXHR, textStatus, errorThrown) 
                    {
                        errorMessage(jqXHR.responseText);
                        hideLoadWithElement(preLoad);
                    }
                }
            );
    }

    function displayObjectives(){
        output = "";
        for (var x = 0; x < count_objectives; x++){
            output += "<div class='objective_wrapper rowDelete'><div class='objectivediv'><a href='javascript:void(0)' onClick='removeObjective("+x+")' class='deleteicon'></a><strong>Objective</strong> "+array_objectives[x].objective+"</div><div class='objectivediv'><strong>Measurable</strong> "+array_objectives[x].measureable+"</div><div class='objectivediv'><strong>Deadline</strong> "+array_objectives[x].datedeadline+"</div></div><input type='hidden' name='input_objective[]' value='"+array_objectives[x].objective+"' /><input type='hidden' name='input_measureable[]' value='"+array_objectives[x].measurable+"' /><input type='hidden' name='input_datedeadline[]' value='"+array_objectives[x].datedeadline+"' />";   
        }

        $(".objectives_content").html(output);
    }

    function removeObjective(number){
        count_objectives = count_objectives - 1;
        array_objectives.splice(number,1);
        displayObjectives();
    }

    function searchExercise(el, event,page){
    $("#search_results").show();
    if ($("#ex_name").val() != globalExName && $("#ex_name").val().length > 1){
        $(".blockholderpopup").css({
            position    : 'absolute',
            top         : $("input[name=ex_name]").position().top + 40,
            left        : $("input[name=ex_name]").position().left,
            background  : '#FFF',
            width       : '400px',
            padding     : '7px',
            'text-align': 'center'
        });
        $(".blockholderpopup").fadeIn(350);
        $(".blockholderpopup").empty().append(imgLoad.clone());
        $.ajax({
            'async'             :   true,
            'url'               :   '/Exercises/Search',
            'dataType'          :   'html',
            'type'              :   'post',
            'data'              :   {search: $("#ex_name").val(), pageSize:page},
            'beforeSend'        :   function(){
                                        $(".blockholderpopup").empty().append(imgLoad.clone());
                                        $('input[name=ex_name]').attr('ex', '');
                                        $('input[name=ex_name]').attr('desc', '');
                                    },
            'success'           :   function(data){
                                        var html = "";
                                        html = displayResults(data);
                                        $("#search_results").empty().append(html);
                                        
                                        $(function(){
                                            $(document).click(function(event) {
                                                if ($(event.target).closest(".blockholderpopup").length) return;
                                                $(".blockholderpopup").fadeOut(350);
                                                event.stopPropagation();
                                            });
                                        });
                                    }
        });
    }
    if(event != undefined && event != null){
        if (event.keyCode == 27)
            $(".blockholderpopup").fadeOut(350);
        }
    globalExName = el.val();
}



function displayResults(results){
        var json = JSON.parse(results);
        var response = json.data;
        var html = "";
        var margin = '';
        for(var x = 0; x < response.length; x++){
            response[x];
            margin = '';
            if (x % 4 == 0|| x == 0) margin = " marginleftnone"; 
            var img = response[x].image;
            if(img == null || img == "null"){
                img = "img/default.gif";
            }
            var onclick = "setExercise(\""+response[x].name+"\", \""+response[x].bodygroupName+"\", \""+response[x].id+"\", null,\"Trainee\", \""+img+"\", \""+response[x].bodygroupId+"\")";
            html += '<div class="exercisesimages '+margin+'" onclick=\''+onclick+'\'><a href="javascript:void(0)"><span>'+response[x].name+'</span><img src="/'+img+'" alt="'+response[x].name+'"></a></div>';
        }
        if(response.length < json.total){
            html += "<div class=\"clearfix\"></div><div class='btmbuttonholder'><div class='clearfix'></div><span class='hrborder'></span><a href='javascript:void(0)' onclick='searchExercise($(this),null,"+response.length+"); arguments[0].stopPropagation(); return false;' class='greybtn' style='float:none'>More Exercises</a></div>";
        }
        return html;
        
}


function setExercise(exname, bgname, ex,type, desc,img,cat){
    //$(".blockholderpopup, .popextralarge, .blackbg").fadeOut(350, function(){
        $("#search_results").hide();
        $('input[name=body_group]').val(bgname);
        $('#ex_name').val(exname);
        $('#ex_name').attr('ex', ex);
        if(img == null || img == "null"){
            img = "img/default.gif";
        }
        $('#ex_name').attr('img', img);
        $('#ex_name').attr('cat', cat);
        //$('input[name=ex_name]').attr('desc', desc);
        
   // });
    //$.fancybox.close();
    addExercise();
}


function addExercise(){
    var exercise = {
        ex      : $('input[name=ex_name]').attr('ex'),
        img     : $('input[name=ex_name]').attr('img'),
        cat     : $('input[name=ex_name]').attr('cat'),
        name    : $('input[name=ex_name]').val(),
        notes    : "",
        sets    : 0,
        templateSets : [],
        templateWeight : [],
        rest    : '60',
        reps    : 0,
        speed   : 0,
        distance: 0,
        time    : 0,
        tech    : 'Normal',
        desc    : $('input[name=ex_name]').attr('desc')
    }
    if(exercise.cat == 18){
        exercise.speed = 4.5;
        exercise.distance = 0;
        exercise.time = 3600;
        exercise.sets = 1;
        exercise.reps = 1;
    } else {
        exercise.sets = 3;
        exercise.reps = 12;
        exercise.templateSets = [12,12,12];
    }
    if (exercise['ex'] != '' && exercise['name'] != ''){
        exs[exsCount] = exercise;
        AddExerciseToHTML(exsCount);
        exsCount++;
        $('select[name=body_group]').val('');
        $('input[name=ex_name]').attr('ex', '');
        $('input[name=ex_name]').attr('desc', '');
        $('input[name=ex_name]').attr('cat', '');
        $('input[name=ex_name]').attr('img', '');
        $('input[name=ex_name]').val('');
        globalExName = '';
    } else
        error_mess('Please, choose an exercise');
}


function AddExerciseToHTML(exNum){
    
    var margin = "";
    
    if(exNum % 4 == 0 || exNum == 0){
        margin = "marginleftnone";
    }
    
    var divExs = $('#selected_ex');
    
    var div = $('<div />', { class : 'foodsoption addedExercise', ex : exNum, onclick : 'addToSelection($(this)); return false;' });
    var span = $('<span />');
    var a = $('<a />', {href : '#', onclick : 'removeExercise($(this)); return false;'});
    var img = $('<img />', {src : '/images/close.png', alt : 'cross'});
    var strong = $('<strong />');
    
    var div = '<div class="exercisesimages foodsoption addedExercise '+margin+'"><a class="deleteicon2" onClick="deleteExercise('+exNum+')"></a><a  href="javascript:void(0)" onClick="deleteExercise('+exNum+')"><span>'+exs[exNum]['name']+'</span><img src="/'+exs[exNum]['img']+'" alt="profile"></a></div>';
    
    //a.append(img);
    //span.append(a);
    //strong.append(exs[exNum]['name']);
    //div.append(span).append(strong).append(exs[exNum]['desc']);
    //div.append(span).append(strong);

    if (divExs.find('.foodsoption').length > 0)
        divExs.append(div);
    else
        divExs.empty().append(div);        
    
    addRightMarginToExList();
}



function editExercises(){
    var divExs = $('#edit_exercises');
    divExs.empty();
    
    
    
    for (x = 0; x < exs.length; x++){
    var margin = "";
    
    if(x % 4 == 0 || x == 0){
        margin = "marginleftnone";
    }
    
    var divExs = $('#edit_exercises');
    
    var div = $('<div />', { class : 'foodsoption2 addedExercise', ex : x, onclick : 'addToSelection($(this)); return false;' });
    var span = $('<span />');
    var a = $('<a />', {href : '#', onclick : 'removeExercise($(this)); return false;'});
    var img = $('<img />', {src : '/images/close.png', alt : 'cross'});
    var strong = $('<strong />');
    
    var div = '<div class="pull  '+margin+'" id="edit_exercises_'+x+'"><div class="exercisesimages foodsoption2 addedExercise '+margin+'"><a onclick="editExercise('+x+')" href="javascript:void(0)"><span>'+exs[x]['name']+'</span><img src="/'+exs[x]['img']+'" alt="profile"></a></div><div class="mark">'+exs[x]['sets']+'x '+exs[x]['reps']+'</div></div>';
    
    //a.append(img);
    //span.append(a);
    //strong.append(exs[exNum]['name']);
    //div.append(span).append(strong).append(exs[exNum]['desc']);
    //div.append(span).append(strong);

    if (divExs.find('.foodsoption2').length > 0)
        divExs.append(div);
    else
        divExs.empty().append(div); 
    
    }
    
    
    
}



function removeSelected(){
    for (x = 0; x < exs.length; x++){
        
    $("#edit_exercises_"+x).removeClass("selected");
    
        
    }
    
}

function generateOrder(){

    var divExsNumbers = $('#ex_orderNumbers');
    var divExs = $('#orderList');
    divExs.empty();
    divExsNumbers.empty();
    for (x = 0; x < exs.length; x++){
        var cell = "";
        cell = "<article class='exs-row'>"+(x+1)+"</article>";
        $('#ex_orderNumbers').append(cell);
    }
    for (x = 0; x < exs.length; x++){
        
        var cell = "";
        if(exs[x]['cat'] == 18){
            cell = '<li class="exs-row list" id="'+(x+1)+'"><article><img src="/'+exs[x]['img']+'" alt="Schedule Image"><div class="imagedetail"><h2 style="border-bottom:0px">'+exs[x]['name']+'</h2><p>'+exs[x]['sets']+' of '+exs[x]['time']+' seconds</p></div></article></li>'; 
        } else {
            cell = '<li class="exs-row list" id="'+(x+1)+'"><article><img src="/'+exs[x]['img']+'" alt="Schedule Image"><div class="imagedetail"><h2 style="border-bottom:0px">'+exs[x]['name']+'</h2><p>'+exs[x]['sets']+' of '+exs[x]['reps']+'</p></div></article></li>'
        }
        
        $('#orderList').append(cell);
        
    
        
    }

    $( "#orderList" ).sortable({
                axis            :   'y',
                helper: "clone",
                 zIndex: '5000',
                 appendTo: '#orderList',   
                stop           :   function(){
                                        reOrderEx();
                                    }
                
            });
    $( "#orderList" ).disableSelection();
}

function reOrderEx(){
    var exsAux = [];
    $("#orderList li").each(function (index, value) {
        exsAux[index] = exs[Number($(value).attr('id')) - 1];
    });

    $('#orderList li').each(function (index, value) {
        $(this).attr('id', index + 1);
    });
    
    for (var i = 0; i < exs.length; i++){
        exs[i] = exsAux[i];
    }
}


function addRightMarginToExList(){
    var div = $('.currentfoods');
    div.find('.foodsoption').each(function(i){
        if ((i + 1) % 2 == 0)
            $(this).addClass('rightmargin');
        else
            $(this).removeClass('rightmargin');
    });
   
}

function deleteExercise(number){

    exsCount = exsCount - 1;
    //alert( exs.toSource());
    exs.splice(number,1);
    //alert( exs.toSource() );
    refreshExercises();
    
}


            

function refreshExercises(){
    var divExs = $('#selected_ex');
     divExs.empty();
    for (x = 0; x < exs.length; x++){
        
    AddExerciseToHTML(x);
    
        
    }
}



function editExercise(x){
    $("#editAll").val(0);
    removeSelected();
    
    
    if(exs[x]['cat'] == 18){
        $(".normal").hide();
        $(".cardio").show();
    } else {
        $(".normal").show();
        $(".cardio").hide();
    }
    
    $("#edit_exercises_"+x).addClass("selected");
    $("#ex_edit_id").val(exs[x]['id']);
    $("#ex_edit_name").val(exs[x]['name']);
    $("#ex_edit_image").attr("src", "/"+exs[x]['img']);
    $("#ex_edit_sets").val(exs[x]['sets']);
    $("#ex_edit_reps").val(exs[x]['reps']);

    $("#ex_edit_distance").val(exs[x]['distance']);
    $("#ex_edit_speed").val(exs[x]['speed']);
    $("#ex_edit_time").val(exs[x]['time']);

    var output = "";
    for(var t = 0; t < $("#ex_edit_sets").val(); t++ ){
        output += "<label  style='width:50px'>Set "+(t+1)+"</label>";
        if(exs[x]['templateWeight'][t] !== undefined){
            output += "<input  style='width:50px;' type='text' name='templateSet["+t+"]' class='templateSet' id='templateSet"+t+"' onchange='saveEdit()' value='"+exs[x]['templateSets'][t]+"' /> <label style='width:50px;margin-left: 80px;'>Weight</label> <input style='width:50px;' type='text' placeholder='Weight' name='templateWeight["+t+"]' class='templateWeight' id='templateWeight"+t+"' onchange='saveEdit()' value='"+exs[x]['templateWeight'][t]+"' />";
        } else {
            output += "<input  style='width:50px;' type='text' name='templateSet["+t+"]' class='templateSet' id='templateSet"+t+"' onchange='saveEdit()' value='"+exs[x]['templateSets'][t]+"' /> <label style='width:50px;margin-left: 80px;'>Weight</label> <input style='width:50px;' type='text' placeholder='Weight' name='templateWeight["+t+"]' class='templateWeight' id='templateWeight"+t+"' onchange='saveEdit()' value='' />";
        }
        
    }

    $("#repsHolder").html(output);

    
   // alert(exs[x]['notes']);
    $("#ex_edit_notes").val(exs[x]['notes']);

    $("#ex_edit_sets_reps").html(exs[x]['sets']+" x "+exs[x]['reps']);
    $("#ex_edit_sets_reps_desc").text(exs[x]['sets']+" sets of "+exs[x]['reps']+" repetitions");
    $("#ex_edit_js_id").val(x);
    $("#edit_details").show();
    $("#edit_details2").show();
    
    
    
}

function reDrawTemplateSets(x){
    var output = "";
    for(var t = 0; t < $("#ex_edit_sets").val(); t++ ){
        output += "<label  style='width:50px'>Set "+(t+1)+"</label>";
        if(exs[x]['templateSets'][t] !== undefined){
            output += "<input style='width:50px;' type='text' name='templateSet["+t+"]' class='templateSet' id='templateSet"+t+"' onchange='saveEdit()' value='"+exs[x]['templateSets'][t]+"' /> <label  style='width:50px;margin-left: 80px;'>";
            if(exs[x]['templateWeight'][t] !== undefined){
                output += "Weight</label> <input style='width:50px;'  placeholder='Weight' type='text' name='templateWeight["+t+"]' class='templateWeight' id='templateWeight"+t+"' onchange='saveEdit()' value='"+exs[x]['templateWeight'][t]+"' />";
            } else {
                output += "Weight</label> <input style='width:50px;'  placeholder='Weight' type='text' name='templateWeight["+t+"]' class='templateWeight' id='templateWeight"+t+"' onchange='saveEdit()' value='' />";  
            }
        } else {
            output += "<input  style='width:50px;' type='text' name='templateSet["+t+"]' class='templateSet' id='templateSet"+t+"' onchange='saveEdit()' value='"+$("#ex_edit_reps").val()+"' /> <label  style='width:50px;margin-left: 80px;'>Weight</label> <input style='width:50px;'  placeholder='Weight' type='text' name='templateWeight["+t+"]' class='templateWeight' id='templateWeight"+t+"' onchange='saveEdit()' value='' />";
        }

    }
    $("#repsHolder").html(output);

}
    
function saveEdit(){
    var bool = $("#editAll").val();
    if(bool == 1){
        
        for (x = 0; x < exs.length; x++){
        
            exs[x]['notes'] = $("#ex_edit_notes").val();  
            exs[x]['sets'] = $("#ex_edit_sets").val();
            exs[x]['reps'] = $("#ex_edit_reps").val();      
        }
    } else {
        var x = $("#ex_edit_js_id").val();
        
        //alert(exs[x]['cat'] );
        var templateSets = [];
        var templateWeight = [];
        if(exs[x]['cat'] == 18){
            exs[x]['notes'] = $("#ex_edit_notes").val();  
            exs[x]['sets'] = $("#ex_edit_sets").val();
            exs[x]['speed'] = $("#ex_edit_speed").val();
            exs[x]['distance'] = $("#ex_edit_distance").val();
            exs[x]['hr'] = $("#ex_edit_HR").val();
            exs[x]['notes'] = $("#ex_edit_notes").val();
            exs[x]['time'] = $("#ex_edit_time").val();
            $("#ex_edit_sets_reps").html(exs[x]['sets']+" x "+exs[x]['reps']);
            $("#ex_edit_sets_reps_desc").text(exs[x]['sets']+" sets of "+exs[x]['time']+" seconds");
            reDrawTemplateSets(x);
        } else {
            $(".templateSet").each(function(index,element){
                templateSets.push($(element).val());
            });

            $(".templateWeight").each(function(index,element){
                templateWeight.push($(element).val());
            });
            exs[x]['templateSets'] = templateSets;
            exs[x]['templateWeight'] = templateWeight;

            exs[x]['notes'] = $("#ex_edit_notes").val();  
            exs[x]['sets'] = $("#ex_edit_sets").val();
            if($("#ex_edit_reps").val() !=  exs[x]['reps']){
                templateSets = [];
                for(var t = 0; t < $("#ex_edit_reps").val(); t++){
                    templateSets.push($("#ex_edit_reps").val());
                }
                exs[x]['templateSets'] = templateSets;
            }
            exs[x]['reps'] = $("#ex_edit_reps").val();

            $("#ex_edit_sets_reps").html(exs[x]['sets']+" x "+exs[x]['reps']);
            $("#ex_edit_sets_reps_desc").text(exs[x]['sets']+" sets of "+exs[x]['reps']+" repetitions");
            reDrawTemplateSets(x);
        }
        
        
        
        
    }
    successMessage("Saved");
    $("#ex_edit_notes").val("");
    $('#edit_exercises').empty();
    editExercises();
    removeSelected();
    
}

function editAll(){
    $("#edit_details").show();
    $("#edit_details2").hide();
    for (x = 0; x < exs.length; x++){
        
    $("#edit_exercises_"+x).addClass("selected");
    $("#editAll").val(1);
        
    }
    
    successMessage('All exercises are selected');   
}

function createWorkout(){
    var pName = $('input[name=pname]');
    if (pName.val() != ''){
        var program = {};
       
            var day = 1;
            program[day] = {};
            for (x = 0; x < exs.length; x++){
                //var ex = exs['ex'];
                program[day][x] = {};
                program[day][x]['rest'] = {};
                program[day][x]['reps'] = {};

                program[day][x]['templateSets'] = exs[x]['templateSets'];
                program[day][x]['templateWeight'] = exs[x]['templateWeight'];
                
                program[day][x]['speed'] = {};
                program[day][x]['distance'] = {};
                program[day][x]['hr'] = {};
                program[day][x]['time'] = {};
                program[day][x]['notes'] = {};
                program[day][x]['weight'] = {};
                
                program[day][x]['comment'] = exs[x]['comments'];
                //dayHolder = $(this).children('.daysholder');
                program[day][x]['exercise'] = exs[x]['ex'];
                program[day][x]['notes'] = exs[x]['notes'];

                program[day][x]['technique'] = 'Normal';
                //$(this).find('.rest').each(function(){
                   //var set = $(this).closest('td').attr('set');
                   //program[day][ex]['rest'][set] = $(this).prev('input').val();
                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['rest'][y] = exs[x]['rest'];
                  }
                  
                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['reps'][y] = exs[x]['reps'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['reps'][y] = exs[x]['reps'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['weight'][y] = exs[x]['weight'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['speed'][y] = exs[x]['speed'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['distance'][y] = exs[x]['distance'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['time'][y] = exs[x]['time'];
                  }

                  for (y = 0; y < exs[x]['sets']; y++){
                    program[day][x]['hr'][y] = exs[x]['hr'];
                  }

                  
                  
            }
            
            //return;
 
        var form = $('#createform');
        form.find('input[name=program]').val(JSON.stringify(program));
        var details = {};
        details['name'] = pName.val();
        details['available'] = $("#available").val();
        details['price'] = $("#price").val();
        details['user'] = $("#user").val();
        
        objectives = "";
        for(x = 0; x < array_objectives.length; x++){
            objectives += "Objective: "+array_objectives[x]["objective"];
            objectives += "Measurable: "+array_objectives[x]["measureable"];
            objectives += "Date Deadline: "+array_objectives[x]["datedeadline"];    
            objectives += " | ";
        }
        
        details['obj'] = objectives;
        form.find('input[name=program_details]').val(JSON.stringify(details));
        form.submit();
    } else
        errorMessage('Please enter a program name');    
}

 $(function() {

        $( "#searchclient" ).autocomplete({
                source: "/widgets/people/suggest",
                minLength: 2,
                response: function(event,ui){
                     if (ui.content.length === 0) {
                        $("#results").text("No results found");
                    }
                },
                select: function( event, ui ) {
                    $( "#searchclient" ).val( ui.item.firstName+" "+ui.item.lastName );

                    $( "#user" ).val( ui.item.id );
                    return false;
                }
        }) .autocomplete( "instance" )._renderItem = function( ul, item ) {
            $("#results").text("");
            var image = "/img/default.gif";
            if(item.thumb != null){
                image = "/"+item.thumb;
            }
            return $( "<li style='cursor:pointer' class='clientinfo marginleftnone clearfix'>" )
            .append( "<a class='image fltleft'><img width:45; height:45; src='"+image+"'/></a><div class='detail'>" + item.firstName + "<br>" + item.lastName + "</div>")
            .appendTo( ul );
        };
    });


</script>



@endsection
