class LogHistory {
    constructor() {
        this.logs = [];
    }

    newLog(level, message) {
        const timestamp = new Date().toISOString();
        this.logs.push({ level, message, timestamp });
    }

    getLogs() {
        return this.logs;
    }

    filterLogsByLevel(level) {
        return this.logs.filter(log => log.level === level);
    }

    clearLogs() {
        this.logs = [];
    }
}