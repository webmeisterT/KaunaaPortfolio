import axios from "axios";
import { v4 } from "uuid";

export const apiClients = axios.create({
  baseURL: "/api",
});

export const uuidv4 = v4;
