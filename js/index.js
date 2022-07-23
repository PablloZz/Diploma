'use strict';
/**
 *@fileoverwiew
 */

/**
*@type { PaymentsClient }
*@private
*/

const tokenizationSpecification = {
  type: 'PAYMENT_GATEWAY',
  parameters: {
    gateway: 'example',
    gatewayMerchantId: 'gatewayMerchantId',
  }
}

const cardPaymentMethod = {
  type: 'CARD',
  tokenizationSpecification: tokenizationSpecification,
  parameters: {
    allowedCardNetworks: ['VISA', 'MASTERCARD'],
    allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
  }
};

const googlePayConfiguration = {
  apiVersion: 2,
  apiVersionMinor: 0,
  allowedPaymentMethods: [cardPaymentMethod],
};

let googlePayClient;

function onGooglePayLoaded() {
  googlePayClient = new google.payments.api.PaymentsClient({
    environment: 'PRODUCTION',
  });

  googlePayClient.isReadyToPay(googlePayConfiguration)
    .then(response => {
      if (response.result) {
        createAndAddButton();
      } else {

      }
    })
    .catch(error => console.log('isReadyToPay error', error));
}

function createAndAddButton() {
  const googlePayButton = googlePayClient.createButton({
    onClick: onGooglePayButtonClicked,
  });

  document.getElementById('buy-now').appendChild(googlePayButton);
}

function onGooglePayButtonClicked() {
  const paymentDataRequest = { ...googlePayConfiguration };
  paymentDataRequest.merchantInfo = {
    merchantId: 'BCR2DN4TYCL4HGCR',
    merchantName: 'Galintel',
  };

  const selectedItem = {
    price: '200'
  }
  paymentDataRequest.transactionInfo = {
    totalPriceStatus: 'FINAL',
    totalPrice: selectedItem.price,
    currencyCode: 'UAH',
    countryCode: 'UA',
  };

  googlePayClient.loadPaymentData(paymentDataRequest)
    .then(paymentData => processPaymentData(paymentData))
    .catch(error => console.log('loadPaymentData error: ', error));
}

function processPaymentData(paymentData) {
  fetch(ordersEndpointUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: paymentData
  })
}