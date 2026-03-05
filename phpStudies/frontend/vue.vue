<template>
  <div class="container">
    <button class="toggle-theme" @click="changeTheme"></button>

    <div v-if="!isSent">
      <h1>Contattaci</h1>

      <form @submit.prevent="validateForm">
        
        <div class="field">
          <label>Nome completo</label>
          <input v-model="formName" type="text" placeholder="Il tuo nome">
          <span class="error">{{ errorName }}</span>
        </div>

        <div class="field">
          <label>Metodo di contatto</label>
          <select v-model="contactType">
            <option value="email">E-mail</option>
            <option value="phone">Telefono</option>
          </select>
        </div>

        <div class="field">
          <label>{{ contactType === 'email' ? 'Indirizzo E-mail' : 'Numero di Telefono' }}</label>
          <input v-if="contactType === 'email'" v-model="formEmail" type="text" placeholder="esempio@mail.com">
          <input v-else v-model="formPhone" type="text" placeholder="+39 000 000">
          <span class="error">{{ contactType === 'email' ? errorEmail : errorPhone }}</span>
        </div>

        <div class="field" style="height: 130px;">
          <label>Messaggio</label>
          <textarea v-model="formMessage" placeholder="Come possiamo aiutarti?"></textarea>
          <span class="error">{{ errorMessage }}</span>
        </div>

        <button type="submit" class="btn">Invia Messaggio</button>
      </form>
    </div>

    <div v-else class="success-screen">
      <div style="font-size: 50px;">🚀</div>
      <h2>Inviato con successo!</h2>
      <p>Grazie {{ formName }}, ti risponderemo al più presto.</p>
      <button class="btn" style="width: 150px; margin-top: 20px;" @click="isSent = false">Indietro</button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

// Dati
const formName = ref('');
const contactType = ref('email');
const formEmail = ref('');
const formPhone = ref('');
const formMessage = ref('');
const isSent = ref(false);

// Errori
const errorName = ref('');
const errorEmail = ref('');
const errorPhone = ref('');
const errorMessage = ref('');

// Tema
const isDark = ref(false);
const changeTheme = () => {
  isDark.value = !isDark.value;
  document.documentElement.setAttribute('data-theme', isDark.value ? 'dark' : 'light');
};

// Validazione Email
const checkEmail = (email) => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
};

const validateForm = async () => {
  errorName.value = '';
  errorEmail.value = '';
  errorPhone.value = '';
  errorMessage.value = '';

  let isValid = true;

  if (formName.value.trim().length < 2) {
    errorName.value = "Il nome è troppo breve";
    isValid = false;
  }

  if (contactType.value === 'email' && !checkEmail(formEmail.value)) {
    errorEmail.value = "Formato e-mail non valido";
    isValid = false;
  }

  if (contactType.value === 'phone' && formPhone.value.trim().length < 6) {
    errorPhone.value = "Numero non valido";
    isValid = false;
  }

  if (formMessage.value.trim().length < 10) {
    errorMessage.value = "Il messaggio deve contenere almeno 10 caratteri";
    isValid = false;
  }

  if (!isValid) return;

  // 🔽 BACKEND'E POST
  try {
    const response = await fetch('../backend/index.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: new URLSearchParams({
        firstName: formName.value,
        email: contactType.value === 'email' ? formEmail.value : '',
        formText: formMessage.value
      })
    });

    if (response.ok) {
      isSent.value = true;

      // Formu temizle
      formName.value = '';
      formEmail.value = '';
      formPhone.value = '';
      formMessage.value = '';
    }

  } catch (error) {
    console.error("Errore durante l'invio:", error);
  }
};
</script>