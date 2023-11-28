"use strict";
var KTCreateAccount = (function () {
    var e,
        t,
        i,
        o,
        a,
        r,
        s = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) &&
                new bootstrap.Modal(e),
                (t = document.querySelector("#kt_create_account_stepper")) &&
                ((i = t.querySelector("#kt_create_account_form")),
                    (o = t.querySelector('[data-kt-stepper-action="submit"]')),
                    (a = t.querySelector('[data-kt-stepper-action="next"]')),
                    (r = new KTStepper(t)).on(
                        "kt.stepper.changed",
                        function (e) {
                            2 === r.getCurrentStepIndex()
                                ? (o.classList.remove("d-none"),
                                    o.classList.add("d-inline-block"),
                                    a.classList.add("d-none"))
                                : 3 === r.getCurrentStepIndex()
                                    ? (o.classList.add("d-none"),
                                        a.classList.add("d-none"))
                                    : (o.classList.remove("d-inline-block"),
                                        o.classList.remove("d-none"),
                                        a.classList.remove("d-none"));
                        }
                    ),
                    r.on("kt.stepper.next", function (e) {
                        console.log("Good job! Keep going! One step closer to NMTC");
                        var t = s[e.getCurrentStepIndex() - 1];
                        t
                            ? t.validate().then(function (t) {
                                console.log("validated!"),
                                    "Valid" == t
                                        ? (e.goNext(), KTUtil.scrollTop())
                                        : Swal.fire({
                                            text: "Sorry, please complete all informations to continue.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText:
                                                "Ok, got it!",
                                            customClass: {
                                                confirmButton:
                                                    "btn btn-light",
                                            },
                                        }).then(function () {
                                            KTUtil.scrollTop();
                                        });
                            })
                            : (e.goNext(), KTUtil.scrollTop());
                    }),
                    r.on("kt.stepper.previous", function (e) {
                        console.log("stepper.previous"),
                            e.goPrevious(),
                            KTUtil.scrollTop();
                    }),
                    s.push(
                        FormValidation.formValidation(i, {
                            fields: {


                                birthday: {
                                    validators: {
                                        notEmpty: {
                                            message: "Birthday is required",
                                        },
                                        date: {
                                            format: "DD-MM-YYYY",
                                            message: "The value is not a valid date",
                                        },
                                        callback: {
                                            message: "You must be at least 15 years old",
                                            callback: function (input) {
                                                const today = new Date();
                                                const birthdateArray = input.value.split("-");
                                                const birthDate = new Date(birthdateArray[2], birthdateArray[1] - 1, birthdateArray[0]);
                                                let age = today.getFullYear() - birthDate.getFullYear();
                                                const monthDiff = today.getMonth() - birthDate.getMonth();
                                                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                                                    age--;
                                                }
                                                // Enable or disable the 'cin' field validation based on age
                                                // const cinField = i.querySelector('[name="cin"]');
                                                // const cinValidator = s[0].fields.cin.validators;
                                                //     console.log(s[0].fields.cin.validators);
                                                
                                                // cinValidator.updateFieldStatus(cinField, 'cin', 'notEmpty', age > 18);
                                                return age >= 15;
                                            }
                                        }
                                    },
                                },
                                gender: {
                                    validators: {
                                        notEmpty: {
                                            message: "Gender is required",
                                        },
                                    },
                                },
                                phone: {
                                    validators: {
                                        notEmpty: {
                                            message: "Phone is required",
                                        },
                                        // length should be 8 digits
                                        stringLength: {
                                            min: 8,
                                            max: 10,
                                            message: "Phone number should be 8 digits - 11 111 111"
                                        },
                                    }
                                },
                                city: {
                                    validators: {
                                        notEmpty: {
                                            message: "City is required",
                                        },
                                    },
                                },
                                // cin: {
                                //     validators: {
                                //         notEmpty: {
                                //             message: "CIN is required",
                                //         },
                                //     },
                                // },
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger(),
                                bootstrap:
                                    new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row",
                                        eleInvalidClass: "",
                                        eleValidClass: "",
                                    }),
                            },
                        })
                    ),

                    $(i.querySelector('[name="card_expiry_month"]')).on(
                        "change",
                        function () {
                            s[3].revalidateField("card_expiry_month");
                        }
                    ),
                    $(i.querySelector('[name="card_expiry_year"]')).on(
                        "change",
                        function () {
                            s[3].revalidateField("card_expiry_year");
                        }
                    ),
                    $(i.querySelector('[name="business_type"]')).on(
                        "change",
                        function () {
                            s[2].revalidateField("business_type");
                        }
                    ));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});
