function _createModal(options) {
  const modal = document.createElement("div");
  modal.classList.add("modal");
  modal.insertAdjacentHTML("afterbegin", `
    <div class="modal-overlay" data-close="true">
      <form class="modal-window" id="mailForm">
        <div class="modal-header">
          <h1><i class="fa-solid fa-circle-question"></i>Support</h1>
          <span class="close-support" data-close="true">&times;</span>
        </div>
        <div class="modal-body">
          <input type="text" name="name" id="name" placeholder="Введіть Ім'я">
          <input type="email" name="email" id="email" placeholder="E-mail">
          <input type="text" name="phone" id="phone" placeholder="Телефон">
          <textarea rows="5" name="message" id="message" cols="auto" placeholder="Чим вам допомогти?"></textarea>
        </div>
        <div class="modal-footer">
          <button id="sendMail" data-content>Надіслати</button>
        </div>
        <div id="errorMess"></div>
      </form>
    </div>
  `);
  document.body.appendChild(modal)
  return modal;
}

$.modal = function (options) {
  const $modal = _createModal(options);
  let destroyed = false;

  const modalWind = {
    open() {
      if (destroyed === true) {
        console.log("Modal is destroyed");
      }
      $modal.classList.add("open");
    },
    close() {
      const ANIMATION_DURATION = 300;

      $modal.classList.remove("open");
      $modal.classList.add("close");
      setTimeout(() => {
        $modal.classList.remove("close");
      }, ANIMATION_DURATION);
    }

  }
  
  const listener = e => {
    if (e.target.dataset.close) {
      modalWind.close();
    }
  }

  $modal.addEventListener('click', listener)

  return Object.assign(modalWind, {
    destroy() {
      $modal.parentElement.removeChild($modal);
      $modal.removeEventListener(listener);
      destroyed = true;
    },
    setContent(html) {
      document.querySelector("[data-content]").innerHTML = html;
    }
  })
}

