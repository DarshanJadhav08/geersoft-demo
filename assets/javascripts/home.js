
function openPopup_1(id){
  const popup = document.getElementById('popup_3');
  popup.style.display = 'flex';

  fetch('portfolio-popup.php?id=' + id)
    .then(res => res.json())
    .then(data => {

      if(data.error){
        alert(data.error);
        close_3Popup();
        return;
      }

      // Image
      document.getElementById('popupImage').src =
        'assets/images/portfolio/' + data.image;

      // Tags
      document.getElementById('popupTagLeft').innerText  = data.tag_left;
      document.getElementById('popupTagRight').innerText = data.tag_right;

      // Title & subtitle
      document.getElementById('popupTitle').innerText    = data.title;
      document.getElementById('popupSubtitle').innerText = data.description;

      // Features (expects array)
      const featureBox = document.getElementById('popupFeatures');
      featureBox.innerHTML = '';
      data.features.forEach(f => {
        featureBox.innerHTML += `<li>${f}</li>`;
      });

      // Tech stack (expects array)
      const techBox = document.getElementById('popupTech');
      techBox.innerHTML = '';
      data.tech_stack.forEach(t => {
        techBox.innerHTML += `<span>${t}</span>`;
      });

      // Stats
      document.getElementById('popupUsers').innerText  = data.users;
      document.getElementById('popupUptime').innerText = data.uptime;
      document.getElementById('popupCert').innerText   = data.certified;
    })
    .catch(err => {
      console.error(err);
      close_3Popup();
    });
}

function close_3Popup(){
  document.getElementById('popup_3').style.display = 'none';
}


function openPopup(service){
  // Basic info
  document.getElementById('popupIcon').innerText   = service.icon_emoji || '💻';
  document.getElementById('popupTitle').innerText  = service.title;
  document.getElementById('popupSubtitle').innerText = service.subtitle;
  document.getElementById('popupFullDesc').innerText = service.full_desc;
  document.getElementById('popupResults').innerText = service.results;

  // Benefits list
  let benefitsHTML = '';
  service.benefits.split(',').forEach(item => {
    benefitsHTML += `<li>${item.trim()}</li>`;
  });
  document.getElementById('popupBenefits').innerHTML = benefitsHTML;

  // Features list
  let featuresHTML = '';
  service.features.split(',').forEach(item => {
    featuresHTML += `<li>${item.trim()}</li>`;
  });
  document.getElementById('popupFeatures').innerHTML = featuresHTML;

  // Show popup
  document.getElementById('popupOverlay').style.display = 'flex';
}

function closePopup(){
  document.getElementById('popupOverlay').style.display = 'none';
}



            function openPopup(service){
              // Basic info
              document.getElementById('popupIcon').innerText   = service.icon_emoji || '💻';
              document.getElementById('popupTitle').innerText  = service.title;
              document.getElementById('popupSubtitle').innerText = service.subtitle;
              document.getElementById('popupFullDesc').innerText = service.full_desc;
              document.getElementById('popupResults').innerText = service.results;

              // Benefits list
              let benefitsHTML = '';
              service.benefits.split(',').forEach(item => {
                benefitsHTML += `<li>${item.trim()}</li>`;
              });
              document.getElementById('popupBenefits').innerHTML = benefitsHTML;

              // Features list
              let featuresHTML = '';
              service.features.split(',').forEach(item => {
                featuresHTML += `<li>${item.trim()}</li>`;
              });
              document.getElementById('popupFeatures').innerHTML = featuresHTML;

              // Show popup
              document.getElementById('popupOverlay').style.display = 'flex';
            }

            function closePopup(){
              document.getElementById('popupOverlay').style.display = 'none';
            }

            const wpBtn = document.getElementById("btn-wp");
            const customBtn = document.getElementById("btn-custom");
            const wpSection = document.getElementById("wp-section");
            const customSection = document.getElementById("custom-section");

            wpBtn.onclick = () => {
                wpBtn.classList.add("active");
                customBtn.classList.remove("active");
                wpSection.classList.add("active");
                customSection.classList.remove("active");
            };

            customBtn.onclick = () => {
                customBtn.classList.add("active");
                wpBtn.classList.remove("active");
                customSection.classList.add("active");
                wpSection.classList.remove("active");
            };

            document.addEventListener("DOMContentLoaded", function () {
              document.querySelectorAll(".view-more-btn").forEach(btn => {
                btn.addEventListener("click", function () {
                  const card = this.closest(".card");
                  const details = card.querySelector(".card-details");

                  if (details.style.display === "block") {
                    details.style.display = "none";
                    this.innerText = "View More";
                  } else {
                    details.style.display = "block";
                    this.innerText = "View Less";
                  }
                });
              });
            });
            
            let step = 0;
const steps = document.querySelectorAll('.quote-step');
const dots = document.querySelectorAll('.step-dot');
const title = document.getElementById('stepTitle');

function openQuoteModal(){
  document.getElementById('quoteModal').style.display='flex';
  step = 0;
  showStep(step);
}

function closeQuoteModal(){
  document.getElementById('quoteModal').style.display='none';
}

function showStep(i){
  steps.forEach(s=>s.classList.remove('active'));
  dots.forEach(d=>d.classList.remove('active'));
  steps[i].classList.add('active');
  dots[i].classList.add('active');
  title.innerText=["Basic Information","Project Details","Budget & Timeline"][i];
}

function validateStep(){
  const fields = steps[step].querySelectorAll('input[required], select[required]');
  for(let f of fields){
    if(!f.value && !f.checked){
      f.style.borderColor='#ef4444';
      return false;
    }else{
      f.style.borderColor='rgba(255,255,255,.1)';
    }
  }
  return true;
}

function nextStep(){
  if(!validateStep()) return;
  if(step < steps.length-1){
    step++;
    showStep(step);
  }
}

function prevStep(){
  if(step > 0){
    step--;
    showStep(step);
  }
}
function showStep(i){
  steps.forEach(s => s.classList.remove('active'));
  dots.forEach(d => d.classList.remove('active'));

  steps[i].classList.add('active');
  dots[i].classList.add('active');

  title.innerText = [
    "Basic Information",
    "Project Details",
    "Budget & Timeline"
  ][i];

  const continueBtn = document.getElementById('continueBtn');
  const submitBtn   = document.getElementById('submitBtn');

  // 🔥 BUTTON LOGIC
  if(i === steps.length - 1){
    continueBtn.style.display = 'none';
    submitBtn.style.display   = 'inline-block';
  }else{
    continueBtn.style.display = 'inline-block';
    submitBtn.style.display   = 'none';
  }
}
