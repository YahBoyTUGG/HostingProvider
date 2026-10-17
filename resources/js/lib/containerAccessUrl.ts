export function containerAccessUrl(hostPort: number): string {
    if (typeof window === 'undefined') {
        return '';
    }

    return `http://${window.location.hostname}:${hostPort}`;
}
