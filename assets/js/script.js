$('.single-item').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
});

// _____________________________Increment Counter_____________

const counters = document.querySelectorAll('.countNum');

counters.forEach(counter => {
    counter.innerText = '0'

    const updateCounter = () => {
        const target = +counter.getAttribute('data-target')
        const c = +counter.innerText

        const increment = target / 200;

        if (c < target) {
            counter.innerText = `${Math.ceil(c + increment)}`
            setTimeout(updateCounter, 10) // to change this number you can control the increment speed
        }
        else {
            counter.innerText = target
        }
    }

    updateCounter()
})
// _____________________________services_button_paragraph___________

function veneer() {
    document.getElementById("first").innerHTML = "Veneers and crowns are thin shells of porcelain that fit precisely over the front surfaces of your teeth to restore damage and improve esthetics. The veneers can also mask surface stains while letting light through to appear entirely natural. They are affixed with an adhesive to the front surfaces of the teeth. Porcelain veneers are extremely durable and allow you to function as usual.";
}

function teeth() {
    document.getElementById("first").innerHTML = "We offer in-office and at-home whitening treatments that are highly effective. These treatments brighten your smile, leaving them feeling clean and healthy.";
}

function sixMSmile() {
    document.getElementById("second").innerHTML = "A revolutionary combination of proven orthodontic techniques, modern materials, and innovative thought – Six Month Smiles® utilizes specialized clear braces to gently straighten and align teeth in an average time of just six months.";
}

function invisalign() {
    document.getElementById("second").innerHTML = "Invisalign® takes a modern approach to straightening teeth, using a custom-made series of aligners created for you and only you. These aligner trays are made of smooth, comfortable and virtually invisible plastic that you simply wear over your teeth. Wearing the aligners will gradually and gently shift your teeth into place, based on the exact movements your dentist or orthodontist plans out for you. <br><br>There are no metal brackets to attach and no wires to tighten. You simply pop in a new set of aligners approximately every two weeks, until your treatment is complete and you achieve the confident smile that you’ve always wanted. The best part about the whole process is that most people won’t even know you’re straightening your teeth.";
}

function restorrativ() {
    document.getElementById("third").innerHTML = "Dr. Lyew and his dental team provide a wide range of services to help you keep your teeth and gums healthy so that they will last you a lifetime. Our general and preventive care services include:<br><br>" +
        "– New patient exams, comprehensive exams, and bi-annual checkups<br>" +
        "– Periodontal exams<br>" +
        "– Dental hygiene / cleanings<br>" +
        "– Fillings and sealants<br>" +
        "– Fluoride treatments<br>" +
        "– X-rays";
}

function endodontics() {
    document.getElementById("third").innerHTML = "Patients presenting with tooth pain may need to have endodontic or root canal treatment to remedy the inflamed or infected pulp (the soft tissue inside of the root canal).<br><br>" +
        "To alleviate your pain, we first use local anesthetic, and then remove the inflamed or infected pulp. We carefully clean and shape the inside of the canal, fill and seal the space, and then place a crown or other restoration on the tooth to protect and restore it to full function. After restoration, your tooth will continue to function just like any other tooth.";
}

function prosthodontic() {
    document.getElementById("fourth").innerHTML = "Also known as Dental Prosthetics, this specialty involves the replacement and restoration of teeth lost or damaged due to age or disease. Our goal is to help you achieve your most natural looking smile, while restoring or enhancing function.<br><br>" +
        "To achieve this, we consult with you to determine the most appropriate prosthetic appliance and then prepare the appliance to perfectly fit your bite. We can also provide oral prostheses to correct defects caused by surgery and to assist those with respiratory problems.";
}

function oral() {
    document.getElementById("fourth").innerHTML = "Oral Sedation (also known as conscious sedation) provides a safe and comfortable experience for patients to get the care they need and want. Through the use of oral medications and proper monitoring, sedation techniques allow patients to be relaxed and anxiety-free during dental procedures.";
}

function implants() {
    document.getElementById("fifth").innerHTML = "Dental implants are designed to provide a foundation for replacement teeth that look, feel, and function like natural teeth.<br><br>" +
        "The person who has lost teeth regains the ability to eat virtually anything and can smile with confidence, knowing that teeth appear natural and that facial contours will be preserved.";
}

function bone() {
    document.getElementById("fifth").innerHTML = "A bone graft is used to recreate bone and soft supporting tissues lost due to gum disease. It’s also called regenerative surgery.";
}

function wisdom() {
    document.getElementById("fifth").innerHTML = "Wisdom teeth are the last teeth to erupt within the mouth. When they align properly and gum tissue is healthy, wisdom teeth do not have to be removed. Unfortunately, this does not generally happen.<br><br>" +
        "The extraction of wisdom teeth is necessary when they are prevented from properly erupting within the mouth. They may grow sideways, partially emerge from the gum and even remain trapped beneath the gum and bone. Impacted teeth can take many positions in the bone as they attempt to find a pathway that will allow them to erupt successfully.";
}

// _______________________________________________
$(document).ready(function () {
    $('#fullpage').fullpage({
        autoScrolling: true,
        scrollHorizontally: true,
        navigation: true
    });
})