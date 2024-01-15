async function login() {
    const username = $("#usernameP").val();
    const password = await sha1($("#passwordP").val());
    if ( username == "admin" && password  ===  "5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8") {
      alert("You are a valid user");
    } else {
      alert("You are not a valid user");
    }
  }
  

async function sha1(str) {
    const enc = new TextEncoder();
    const hash = await crypto.subtle.digest('SHA-1', enc.encode(str));
    return Array.from(new Uint8Array(hash))
      .map(v => v.toString(16).padStart(2, '0'))
      .join('');
  }