import java.io.IOException;
import java.nio.file.*;
import java.util.List;

public class week01 {
    public static void main(String[] args) {
        try {
            List<String> commands = Files.readAllLines(Paths.get("submarine.txt"));
            int horizontal = 0;
            int depth = 0;

            for (String command : commands) {
                String[] parts = command.trim().split(" ");
                int value = Integer.parseInt(parts[1]);

                switch (parts[0]) {
                    case "forward":
                        horizontal += value;
                        break;
                    case "down":
                        depth += value;
                        break;
                    case "up":
                        depth -= value;
                        break;
                }
            }
            System.out.println("Access Coordinate: " + (horizontal * depth));

        } catch (IOException e) {
            System.out.println("Error: " + e.getMessage() + "\n");
        }
    }
}
