function formValidation() {
    "use strict";
    /*----------- BEGIN validationEngine CODE -------------------------*/
    $('#popup-validation').validationEngine();
    /*----------- END validationEngine CODE -------------------------*/

    /*----------- BEGIN validate CODE -------------------------*/
    $('#inline-validate').validate({
        rules: {
            required: "required",
            email: {
                required: true,
                email: true
            },
			
            date: {
                required: true,
                date: true
            },
            url: {
                required: true,
                url: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            agree: "required",
            minsize: {
                required: true,
                minlength: 3
            },
            maxsize: {
                required: true,
                maxlength: 6
            },
            minNum: {
                required: true,
                min: 3
            },
            maxNum: {
                required: true,
                max: 16
            }
        },
        errorClass: 'help-block col-lg-6',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });


    $('#block-validate').validate({
        rules: {
			//////////////////////////////akin
			//////////////////////sign up
			txtpassword: {
                required: true,
                minlength: 5
            },
            txtcpassword: {
                required: true,
                minlength: 5,
                equalTo: "#txtpassword"
            },
			txtemail: {
                required: true,
                email: true
            },
			
			txtlastname: "required",
			txtfirstname: "required",
			txtmiddlename: "required",
			txtdegree: "required",
			
			txtschool: "required",
			txtaddress: "required",
			txtcity: "required",
			txtprovince: "required",
			txtbusinessname: "required",
			
			txtposition: "required",
			txtdescription: "required",
			
			txtdepartment: "required",
			
			txtdocument: "required",
			
			txtsection: "required",
			txtsectionname: "required",
			
			txtevalcriteria: "required",
			
			txtprelimdata: "required",
			
			txtevalstatement: "required",
			txtevalcriteria: "required",
			
			txtanalysis: "required",
			
			txtevaluation: "required",
			
			txtstatus: "required",
			txtusertype: "required",
			txtorganization: "required",
			txtindustry: "required",
			txtuserresponsible: "required",
			txtphone: "required",
			txtmobile: "required",
			txtfax: "required",
			
			
			txtcity: "required",
			txtprovince: "required",
			
			txtcamp: "required",
			
			txtnoofemployees: "required",
			
			txtsupplier: "required",
			txtcontactperson: "required",
			
			txtcountry: "required",
			
			txtsupply: "required",
			txtunit: "required",
			txtquantity: "required",
			
			txtroom: "required",
			txtcapacity: "required",
			txtfacility: "required",
			txtcapacity: "required",
			txtactivity: "required",
			txtitinerary: "required",
			txtnoofdays: "required",
			txtages: "required",
			
			txtopportunityname: "required",
			txtprogramname: "required",
			txtcampcategory: "required",
			txtparticipants: "required",
			txtstatus: "required",
			txtnotes: "required",
			txtvalue: "required",
			txtprobabilityofwinning: "required",
			txtforecastedrevenue: "required",
			txtdepositpaid: "required",
			
			txtamountpergroup: "required",
			txtamountperpax: "required",
			txtparticipantname: "required",
			
			txtorno: "required",
			txtpayment: "required",
			
			txtsupplier: "required",
			txtbranchname: "required",
			txtcontactno: "required",
			txtcategory1: "required",
			
			
			txtsectiond1: "required",
			txtsectiond2: "required",
			txtsectiond3: "required",
			txtsectiond4: "required",
			txtsectiond5: "required",
			txtsectiond6: "required",
			txtcoregno: "required",
			txtheading1: "required",
			txtheading2: "required",
			txtheading3: "required",
			txtheading4: "required",
			txtheading5: "required",
			txtheading6: "required",
			
			txtformername: "required",
			txtprofession: "required",
			txtindividual: "required",
			txtpassportnumber: "required",
			txtissuingplace: "required",
			txtnationality: "required",
			txtidnumber: "required",
			
			txtclassofshare: "required",
			txtdenomination: "required",
			txtcurrentholding: "required",
			
			txtnoofsharesacquired: "required",
			txtcertificatenumber: "required",
			txtdistinctivenoofshares: "required",
			txttotalconsideration: "required",
			txtamountstillpayable: "required",
			
			txtusercode: "required",
			txtcompanyregno: "required",
			
			txtservices: "required",
			txtdescription: "required",
			txtamount: "required",
			
			txtnoofsharestransferred: "required",
			txtnewcertificate: "required",
			txttransfereemethod: "required",
			txtinvoiceno: "required",
			txttransactionno: "required",
			txtpayment: "required",
			txtbank: "required",
			txtbankaddress: "required",
			txtmeasurement: "required",
			
			
			//////////////////////////////////
            required2: "required",
            email2: {
                required: true,
                email: true
            },
			
            date2: {
                required: true,
                date: true
            },
            url2: {
                required: true,
                url: true
            },
            password2: {
                required: true,
                minlength: 5
            },
            confirm_password2: {
                required: true,
                minlength: 5,
                equalTo: "#password2"
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            range: {
                required: true,
                range: [5, 16]
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
    /*----------- END validate CODE -------------------------*/
	$('#block-validate1').validate({
        rules: {
			//////////////////////////////akin
			//////////////////////sign up
			txtpassword: {
                required: true,
                minlength: 5
            },
            txtcpassword: {
                required: true,
                minlength: 5,
                equalTo: "#txtpassword"
            },
			txtemail: {
                required: true,
                email: true
            },
			txtlname: "required",
			txtfname: "required",
			txtmname: "required",
			txtcontactno: "required",
			txtorganization: "required",
			////////////////////////////////// log in
            required2: "required",
            email2: {
                required: true,
                email: true
            },
            date2: {
                required: true,
                date: true
            },
            url2: {
                required: true,
                url: true
            },
            password2: {
                required: true,
                minlength: 5
            },
            confirm_password2: {
                required: true,
                minlength: 5,
                equalTo: "#password2"
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            range: {
                required: true,
                range: [5, 16]
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
	$('#block-validate2').validate({
        rules: {
			//////////////////////////////akin
			//////////////////////sign up
			
			txtemail2: {
                required: true,
                email: true
            },
			
			//////////////////////////////////
            required2: "required",
            email2: {
                required: true,
                email: true
            },
            date2: {
                required: true,
                date: true
            },
            url2: {
                required: true,
                url: true
            },
            password2: {
                required: true,
                minlength: 5
            },
            confirm_password2: {
                required: true,
                minlength: 5,
                equalTo: "#password2"
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            range: {
                required: true,
                range: [5, 16]
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
}