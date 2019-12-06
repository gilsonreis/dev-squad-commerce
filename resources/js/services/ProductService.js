export const getAll = (page) => window.axios.get("/api/products", {
    params: {
        page: page,
    },
});
