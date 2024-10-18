import {toast} from "vue3-toastify";
import "vue3-toastify/dist/index.css";

export function showError(message) {
    toast(message, {
        "theme": "colored",
        "type": "error",
        "dangerouslyHTMLString": true,
        "autoClose": 3000,
        "role": "alert",
        "pauseOnHover": false
    });
}

export function showSuccess(message) {
    toast(message, {
        "theme": "colored",
        "type": "success",
        "dangerouslyHTMLString": true,
        "autoClose": 3000,
        "role": "alert",
        "pauseOnHover": false
    });
}
