
  
  
  
  
  
  
  
  
  
  if($('.bbb_viewed_slider').length) {
      var viewedSlider = $('.bbb_viewed_slider');
      viewedSlider.owlCarousel(
          {
              loop:true,
              margin:30,
              autoplay:true,
              autoplayTimeout:8000,
              nav:false,
              dots:false,
              responsive:
              {
                  0:{items:1},
                  575:{items:2},
                  768:{items:3},
                  991:{items:4},
                  1199:{items:6}
              }
          });
    }



function PrevCarousel(section_id) {
  $('.owl-carousel-'+section_id).trigger('prev.owl.carousel')
}
function NextCarousel(section_id) {
  $('.owl-carousel-'+section_id).trigger('next.owl.carousel')
}




$('.images-menu').on('mouseover', function () {
  imageUrl = $(this).css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
  $('#big_img').attr('src', imageUrl)
})








$('#help_topic').on('change', function () {
  if ($('#help_topic').val() == 'Order Related') {
    $('#subOptionDiv').html($('#forOrders').html());
  } 
  else if ($('#help_topic').val() == 'Return/Refund') {
    $('#subOptionDiv').html($('#forOrders').html());
  } 
  else {
    $('#subOptionDiv').html('');
  }
})













$('#filter_form').off('submit').on('submit', function (e) {
    e.preventDefault()
    var formGetURL = $('#filter_form').attr('action') + "?" + $('#filter_form').serialize();
    $.get(formGetURL, function(data) {
      var newContent = $(data).find('#RowDiv').children();
      $('#RowDiv').empty().append(newContent);
      $.getScript('/js/main.js'); 
      history.pushState({page: null}, null, formGetURL);
    });
})






$('#sort_by_select').one('change', function () {
  $('#filter_form').find('input[name="sort_by"]').val($(this).val());
  $('#filter_form').submit();
})



$('.PaginationBtn').on('click', function (e) {
  e.preventDefault();

  var formGetURL = $(this).attr('href');

  $('#RowDiv').load(formGetURL+' #RowDiv')

  history.pushState({page: null}, null, formGetURL);

  $.getScript('/js/main.js'); 
})




$('#CategorySelect').on('change', function () {
  $('#CategoryInput').val($(this).val())
})



$('.ReviewModalToggleBtn').on('click', function () {
    if ($('#ProductReviewForm').hasClass('d-none')) {
      $('#ProductReviewForm').removeClass('d-none')
    } else {
      $('#ProductReviewForm').addClass('d-none')
    }
})

if ($('.star-rating').length) {
  var destroyed = false;
  var starratingPrebuilt = new StarRating('.star-rating-prebuilt', {
      prebuilt: true,
      maxStars: 5,
  });
  var starrating = new StarRating('.star-rating', {
      stars: function (el, item, index) {
          el.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect class="gl-star-full" width="19" height="19" x="2.5" y="2.5"/><polygon fill="#FFF" points="12 5.375 13.646 10.417 19 10.417 14.665 13.556 16.313 18.625 11.995 15.476 7.688 18.583 9.333 13.542 5 10.417 10.354 10.417"/></svg>';
      },
  });
  var starratingOld = new StarRating('.star-rating-old');

}





$('#ProductReviewForm').on('submit', function (e) {
    e.preventDefault()
    var _token      = $('#ProductReviewForm').find('input[name="_token"]').val()
    var product_id  = $('#ProductReviewForm').find('input[name="product_id"]').val()
    var rating      = $('#ProductReviewForm').find('select[name="rating"]').val()
    var title       = $('#ProductReviewForm').find('input[name="title"]').val()
    var message     = $('#ProductReviewForm').find('textarea[name="message"]').val()
    var action     = $('#ProductReviewForm').find('input[name="action"]').val()

    $.ajax({
      url: action,
      method: 'POST',
      data: {
          '_token' : _token,
          'product_id' : product_id,
          'rating' : rating,
          'title' : title,
          'message' : message,
      },
      async: false,
      success: function (data) {

          if (data.status == 200) {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl(data.message, {
                type: "success",
                offset: {from:"bottom", amount: 100},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })  
              
            $('#RatingAreaDIV').load(window.location.href+" #RatingAreaDIV", function () {
              $.getScript('/js/main.js'); 
            })

          }
          if (data.status == 210) {
            $(".bootstrap-growl").remove();
            $.bootstrapGrowl(data.message, {
                type: "success",
                offset: {from:"bottom", amount: 100},
                align: 'center',
                allow_dismis: true,
                stack_spacing: 10,
            })
            fetchReviews('new')
            $('#RatingAreaDIV').load(window.location.href+" #RatingAreaDIV", function () {
              $.getScript('/js/main.js'); 
            })
             
          }
      }
  })

})




// Show Reviews on dedicated reviews page Start
function fetchReviews(type) {
  if (type == 'new') {
    $('#reviewsDivLoader').removeClass('d-none')
    $('.reviewItem').remove()
  }
  var _token              = $('input[name="_token"]').val()
  var reviews_form_action = $('#reviews_form_action').val()
  var product_id          = $('#product_id').val()
  var review_search       = $('#review_search').val()
  var sort_by             = $('#sort_by').val()
  var skip_count          = $('.reviewCount').length
  var domain              = $('#domain').val()
  $.ajax({
    url: reviews_form_action,
    method: 'POST',
    data: {
        '_token'        : _token,
        'product_id'    : product_id,
        'review_search' : review_search,
        'sort_by'       : sort_by,
        'skip_count'    : skip_count,
    },
    async: false,
    success: function (data) {
      if (data.status == 200) {
        $('#reviewsDivLoader').addClass('d-none')
        if (data.reviewsCount == 0) {
            $('#ShowReviewsArea').html(
              `
              <div class="reviewItem">
                <div class="w-100 prod-back-div mt-4" style="height: 146px; background-image: url('${domain}/img/svg/notify.svg');"></div>
                <div class="mt-3" style="text-align: center;">
                    <span style="font-size: 18px;">No Review Found</span>
                </div>
              </div>
              `)
        } 
        else {
          data.reviews.forEach(review => {
            $('#ShowReviewsArea').append(`
            <div class="reviewItem reviewCount" style="border: 1px solid #dddddd; border-radius: 2px; border-left: 0; border-right: 0;">
              <div class="wishlist-basic-padding" >
                  <div class="row">
                      <button type="button" class="btn btn-dark btn-sm">
                          
                          ${review.stars} <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      </button>
                      <span style="padding-left: 12px; padding-top: 3px; font-size: 14px; color: #212121; font-weight: 500;">${review.title}</span>
                  </div>
                  <div class="row">
                      <span style="margin: 12px 0;">
                      ${review.message}
                      </span>
                  </div>
    
                  <div class="row">
                      <span style="margin: 12px 0;">
                          ${review.user.name} <img width="14" src="http://localhost:8000/img/svg/verified-tick.svg" alt=""> (Buyer), ${review.days_ago}
                      </span>
                  </div>

              </div>
            </div>
              `)
        });
          if (data.reviewsCount != $('.reviewCount').length && data.reviewsCount != 0) {
            $('.loadMoreBtnContainer').removeClass('d-none')
          } else {
            $('.loadMoreBtnContainer').addClass('d-none')
          }
        }
      }
    }
  })
}

$('#loadMoreReviews').on('click', function () {
  fetchReviews()
})
// Show Reviews on dedicated reviews page End
















// Fetch QNA Start
function fetchQnas(type) {
 
  if (type == 'new') {
    $('#reviewsDivLoader').removeClass('d-none')
    $('.reviewItem').remove()
  }
  var _token              = $('input[name="_token"]').val()
  var reviews_form_action = $('#reviews_form_action').val()
  var product_id          = $('#product_id').val()
  var review_search       = $('#review_search').val()
  var sort_by             = $('#sort_by').val()
  var skip_count          = $('.reviewCount').length
  var domain              = $('#domain').val()

  $.ajax({
    url: reviews_form_action,
    method: 'POST',
    data: {
        '_token'        : _token,
        'product_id'    : product_id,
        'review_search' : review_search,
        'sort_by'       : sort_by,
        'skip_count'    : skip_count,
    },
    async: false,
    success: function (data) {
      if (data.status == 200) {
        $('#reviewsDivLoader').addClass('d-none')
        if (data.qnasCount == 0) {
            $('#ShowReviewsArea').html(
              `
              <div class="reviewItem">
                <div class="w-100 prod-back-div mt-4" style="height: 146px; background-image: url('${domain}/img/svg/notify.svg');"></div>
                <div class="mt-3" style="text-align: center;">
                    <span style="font-size: 18px;">No QnA Found</span>
                </div>
              </div>
              `)
        } 
        else {
          let content;
          for (let i = 0; i < data.qnas.length; i++) {
            let qnas = data.qnas[i]
            content = `
            <div class="reviewItem reviewCount" style="border-bottom: 1px solid #dddddd; ">
              
            <div style="text-align: left; padding: 10px 24px;">
                <div class="">
                  <span style="color: black; font-weight: 600;">
                    Q: ${qnas.question}
                  </span>
                `
                if (data.answerable) {
                  content += `
                    <span style="color: black; font-weight: 600;" class="float-right">
                      <button class="btn btn-sm btn-dark" id="AddAnswerButton" question_id="${qnas.id}">Add Answer</button>
                    </span>
                  `
                }

                content += `</div>
                  </div>`
                            
              
              if (qnas.answers.length < 1) {
                content += `
                  <div style="text-align: left; padding: 10px 24px;">
                    <div class="">
                      <span style="">No Answers Yet</span>
                    </div>
                  </div>
                `
              }

              else {
                for (let index = 0; index < data.qnas[i].answers.length; index++) {
                
                  let answers = qnas.answers[index]
  
                    content += `
                    <div style="text-align: left; padding: 10px 24px;">
                      <div class="">
                        <span style="">
                          A: ${answers.answer}
                        </span>
                      </div>
                      <div class="mt-1">
                        <span style="">
                        ${answers.user.name} <img width="14" src="http://localhost:8000/img/svg/verified-tick.svg" alt=""> (Buyer), 
                        </span>
                      </div>
                    </div> 
                      `
                }
              }
          
              content += `</div>`;
            }
            $('#ShowReviewsArea').append(content);
          
       
          

            if (data.qnasCount != $('.reviewCount').length && data.qnasCount != 0) {
            $('.loadMoreBtnContainer').removeClass('d-none')
          } else {
            $('.loadMoreBtnContainer').addClass('d-none')
          }
        }


      }
    }
  })
}

$('#loadMoreQnas').on('click', function () {
  fetchQnas()
})



// Open Add Answer Modal with prefilled Question and Existing Answer for same user if exists.
$('#ShowReviewsArea').on('click', '#AddAnswerButton', function () {
  var question_id = $(this).attr('question_id')
  var fetchDataURL = $('#SubmitAnswerForm').find('input[name="fetchData"]').val();
  var question_id_form_field = $('#SubmitAnswerForm').find('input[name="question_id"]').val();

  if (question_id_form_field == question_id) {
    $('#AddAnswerModal').modal('toggle')
    return;
  }

  $.ajax({
    url: fetchDataURL,
    method: "GET",
    data: {
      question_id : question_id,
    },
    success: function (data) {
      if (data.status == 200) {
        $('#SubmitAnswerForm').find('input[name="question_id"]').val(data.qna.id);
        $('#SubmitAnswerForm').find('input[name="question"]').val(data.qna.question);
        if (answer != false) {
          $('#SubmitAnswerForm').find('input[name="answer"]').val(data.answer.answer);
        }
        $('#AddAnswerModal').modal('toggle')
      }

    }
  })

})


$('#SubmitAnswerForm').on('submit', function (e) {
  e.preventDefault()
  var action = $(this).attr('action');
  var _token = $(this).find('input[name="_token"]').val();
  var question_id = $(this).find('input[name="question_id"]').val();
  var answer = $(this).find('input[name="answer"]').val();

  $.ajax({
    url: action,
    method: "POST",
    data: {
      _token: _token,
      question_id: question_id,
      answer: answer,
    },
    success: function (data) {
      if (data.status == 200) {
        $('#review_search').val($('#SubmitAnswerForm').find('input[name="question"]').val());
        fetchQnas('new');
        $('#AddAnswerModal').modal('toggle');
      }
    }
  })

})
// Fetch QNA End





$('#PostQuestionBtn').on('click', function () {
  $('#ask_question').val($('#review_search').val())
  $('#PostQuestionModal').modal('toggle');
})


$('#QuestionSubmitForm').on('submit', function (e) {
  e.preventDefault()
  var action = $('#QuestionSubmitForm').attr('action')
  var _token = $('#QuestionSubmitForm').find('input[name="_token"]').val()
  var question = $('#QuestionSubmitForm').find('input[name="question"]').val()
  var product_id = $('#QuestionSubmitForm').find('input[name="product_id"]').val()

  $.ajax({
    url: action,
    method: 'POST',
    data: {
        '_token'        : _token,
        'product_id'    : product_id,
        'question'      : question,
    },
    async: false,
    success: function (data) {
      if (data.status == 200) {
        $('#PostQuestionModal').modal('toggle');
        $(".bootstrap-growl").remove();
        $('#review_search').val(question); 
        fetchQnas('new');
        $.bootstrapGrowl("Question Added.", {
            type: "success",
            offset: {from:"bottom", amount: 50},
            align: 'center',
            allow_dismis: true,
            stack_spacing: 10,
        })
      }
    }
  })

})




















$('#multi-item-carousel').carousel({
    interval: 10000
  })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });
  


