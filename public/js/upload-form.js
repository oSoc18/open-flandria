var $body = $('body');
var $progressBar = $('progress');
var $animContainer = $('.animation-container');
var value = 0;
var counter = 0;
var transitionEnd = 'webkitTransitionEnd transitionend';

/**
 * Resets the form back to the default state.
 * ==========================================
 */
function formReset() {
    value = 0;
    $progressBar.val(value);
    $('form input').not('button').removeClass('hasInput');
    $('.js-form-step').removeClass('left leaving');
    $('.js-form-step').not('.js-form-step[data-step="1"]').addClass('hidden waiting');
    $('.js-form-step[data-step="1"]').removeClass('hidden');
    $('.form-progress-indicator').not('.one').removeClass('active');

    $animContainer.css({
        'paddingBottom': $('.js-form-step[data-step="1"]').height() + 'px'
    });

    console.warn('Form reset.');
    return false;
}

$('.button-add').click(function(){
    counter++;
    var li = document.createElement('li');
    var input = document.createElement('input');
    input.type = "file";
    input.id = "photos-" + counter;
    input.name = "photos-" + counter;
    li.appendChild(input);

    var rights = document.createElement('li');
    var rightsInput = document.createElement('input');
    rightsInput.type = "text";
    rightsInput.name = "rights-photos-" + counter;
    rightsInput.id = "rights-photos-" + counter;
    var rightsLabel = document.createElement('label');
    rightsLabel.for = "rights-photos-" + counter;
    rightsLabel.innerHTML = "Rights:*";
    rights.appendChild(rightsInput);
    rights.appendChild(rightsLabel);

    var credits = document.createElement('li');
    var creditsInput = document.createElement('input');
    creditsInput.type = "text";
    creditsInput.name = "credits-photos-" + counter;
    creditsInput.id = "credits-photos-" + counter;
    var creditsLabel = document.createElement('label');
    creditsLabel.for = "credits-photos-" + counter;
    creditsLabel.innerHTML = "Credits:*";
    credits.appendChild(creditsInput);
    credits.appendChild(creditsLabel);

    var year = document.createElement('li');
    var yearInput = document.createElement('input');
    yearInput.type = "text";
    yearInput.name = "year-photos-" + counter;
    yearInput.id = "year-photos-" + counter;
    var yearLabel = document.createElement('label');
    yearLabel.for = "year-photos-" + counter;
    yearLabel.innerHTML = "Year:*";
    year.appendChild(yearInput);
    year.appendChild(yearLabel);



    $('.form-step-2 .fieldgroup').append(li);
    $('.form-step-2 .fieldgroup').append(rights);
    $('.form-step-2 .fieldgroup').append(credits);
    $('.form-step-2 .fieldgroup').append(year);

    $('#amt-of-images').val(counter);
    $animContainer.css({
        'paddingBottom': $('.js-form-step[data-step="2"]').height() + 'px'
    });
});

/**
 * Sets up the click handlers on the form. Next/reset.
 * ===================================================
 */
function setupClickHandlers() {

    // Show next form on continue click
    $('button[type="submit"]').on('click', function(event) {
        if($('.required').is(":empty")) {
            $('.alert').css('opacity', '1');
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            event.preventDefault();
        } else {
            event.preventDefault();
            $('.alert').css('opacity', '0');
            var $currentForm = $(this).parents('.js-form-step');
            showNextForm($currentForm);
        }
    });

    $('.upload__button').click(function(){
        event.preventDefault();
    });

    // Reset form on reset button click
    $('.js-reset').on('click', function() {
        formReset();
    });

    return false;
}

/**
 * Shows the next form.
 * @param - Node - The current form.
 * ======================================
 */
function showNextForm($currentForm) {
    var currentFormStep = parseInt($currentForm.attr('data-step')) || false;
    var $nextForm = $('.js-form-step[data-step="' + (currentFormStep + 1) + '"]');

    console.log('Current step is ' + currentFormStep);
    console.log('The next form is # ' + $nextForm.attr('data-step'));

    $body.addClass('freeze');

    // Ensure top of form is in view
    $('html, body').animate({
        scrollTop : $progressBar.offset().top
    }, 'fast');

    // Hide current form fields
    $currentForm.addClass('leaving');
    setTimeout(function() {
        $currentForm.addClass('hidden');
    }, 500);

    // Animate container to height of form
    $animContainer.css({
        'paddingBottom' : $nextForm.height() + 'px'
    });

    // Show next form fields
    $nextForm.removeClass('hidden')
        .addClass('coming')
        .one(transitionEnd, function() {
            $nextForm.removeClass('coming waiting');
        });

    // Increment value (based on 4 steps 0 - 100)
    value += 33;

    // Reset if we've reached the end
    if (value >= 100) {
        formReset();
    } else {
        $('.form-progress')
            .find('.form-progress-indicator.active')
            .next('.form-progress-indicator')
            .addClass('active');

        // Set progress bar to the next value
        $progressBar.val(value);
    }

    // Update hidden progress descriptor (for a11y)
    $('.js-form-progress-completion').html($progressBar.val() + '% complete');

    $body.removeClass('freeze');

    return false;
}

/**
 * Sets up and handles the float labels on the inputs.
 =====================================================
 */
function setupFloatLabels() {
    // Check the inputs to see if we should keep the label floating or not
    $('form input, form textarea').not('button').on('blur', function() {

        // Different validation for different inputs
        switch (this.tagName) {
            case 'TEXTAREA':
                if (this.value !== '') {
                    this.className = 'hasInput';
                } else {
                    this.className = '';
                }
                break;

            case 'INPUT':
                if (this.value !== '') {
                    this.className = 'hasInput';
                } else {
                    this.className = '';
                }
                break;

            case 'TEXTAREA':
                if (this.value !== '') {
                    this.className = 'hasInput';
                } else {
                    this.className = '';
                }
                break;

            default:
                break;
        }
    });

    return false;
}

/**
 * Gets the party started.
 * =======================
 */
function init() {
    formReset();
    setupFloatLabels();
    setupClickHandlers();
}

init();
