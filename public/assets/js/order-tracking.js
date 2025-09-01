$(document).ready(function () {
    function setProgress(stepNumber) {
        $('.step').each(function () {
            $(this).find('.step-circle').removeClass('completed');
            $(this).find('.step-line-inner').removeClass('completed');
            // $(this).find('.step-label').removeClass('active');
        });

        $('.step').each(function () {
            if ($(this).data('step') <= stepNumber) {
                $(this).find('.step-circle').addClass('completed');
                $(this).find('.step-line-inner').addClass('completed');
                $(this).find('.step-label').addClass('active');
            }
        });
        $('.step[data-step="' + stepNumber + '"]').find('.step-label').addClass('active');
    }
    setProgress(4);
});


// modal error fix 


document.querySelectorAll(".modal").forEach((modal) => {
    modal.addEventListener("hidden.bs.modal", function () {
        this.removeAttribute("aria-hidden");
        let triggerButton = document.querySelector(`[data-bs-target="#${this.id}"], [data-bs-toggle="modal"][href="#${this.id}"]`);
        if (triggerButton) {
            setTimeout(() => triggerButton.focus(), 10);
        }
    });
    modal.addEventListener("hide.bs.modal", function () {
        if (document.activeElement && this.contains(document.activeElement)) {
            document.activeElement.blur();
        }
    });
});



//  Mobile processing 

$(document).ready(function () {
    $(".map-close-btn").click(function () {
        $(".map-box").hide();
    });
});

