export function authentication({
    clientId,
    redirectUrl,
    scope = "user:email",
    state = "/",
}) {
    const redirect = () =>
        `https://github.com/login/oauth/authorize?client_id=${clientId}&redirect_url=${redirectUrl}&scope=${scope}&state=${state}`;

    return {
        redirect,
    };
}
