export interface Course {
    id: number;
    name: string;
    program: string;
    homeworks?: Homework[];
    created_at: string;
    updated_at: string;
}

export interface Homework {
    id: number;
    name: string;
    instructions: string;
    scoring_grid: string;
    created_at: string;
    updated_at: string;
}
