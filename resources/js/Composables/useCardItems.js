import { computed } from "vue";

export function useCardItems(view) {
  const cardItemsWelcome = [
    { label: "Pendientes", icon: "pi pi-stopwatch", value: 10, bg: "bg-yellow-400", border: "border-yellow-400" },
    { label: "Enviadas", icon: "pi pi-send", value: 5, bg: "bg-blue-500", border: "border-blue-500" },
    { label: "Recibidas", icon: "pi pi-inbox", value: 8, bg: "bg-green-500", border: "border-green-500" },
  ];

  const cardItemsUsers = [
    { label: "Activos", icon: "pi pi-check-circle", value: 20 },
    { label: "Inactivos", icon: "pi pi-times-circle", value: 3 },
    { label: "Sin rol", icon: "pi pi-question-circle", value: 7 },
  ];

  const items = computed(() => {
    if (view === "Welcome") return cardItemsWelcome;
    if (view === "Index") return cardItemsWelcome;
    if (view === "Users") return cardItemsUsers;
    return [];
  });

  return { items };
}
