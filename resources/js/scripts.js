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

export function formatDateToRu(dateString) {
    const date = new Date(dateString);

    const day = String(date.getUTCDate()).padStart(2, '0');
    const month = String(date.getUTCMonth() + 1).padStart(2, '0');
    const year = date.getUTCFullYear();
    const hours = String(date.getUTCHours()).padStart(2, '0');
    const minutes = String(date.getUTCMinutes()).padStart(2, '0');
    const seconds = String(date.getUTCSeconds()).padStart(2, '0');

    return `${day}.${month}.${year} ${hours}:${minutes}:${seconds}`;
}
