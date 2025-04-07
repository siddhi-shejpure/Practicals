from collections import deque

def water_jug_bfs(capacity_A, capacity_B, target):
    visited = set()
    queue = deque([(0, 0)])  # Start with both jugs empty (0,0)
    visited.add((0, 0))

    while queue:
        current_A, current_B = queue.popleft()
        
        # Check if target is reached
        if current_A == target or current_B == target:  
            print(f"Solution found: ({current_A}, {current_B})")
            return

        # Generate all possible states
        states = [
            (capacity_A, current_B),  # Fill Jug A
            (current_A, capacity_B),  # Fill Jug B
            (0, current_B),           # Empty Jug A
            (current_A, 0),           # Empty Jug B

            # Pour A → B
            (current_A - min(current_A, capacity_B - current_B), 
             current_B + min(current_A, capacity_B - current_B)),

            # Pour B → A
            (current_A + min(current_B, capacity_A - current_A), 
             current_B - min(current_B, capacity_A - current_A))
        ]

        for state in states:
            if state not in visited:
                visited.add(state)
                queue.append(state)

    print("No solution found.")

# Jug capacities and target
capacity_A = 4
capacity_B = 3
target = 2
water_jug_bfs(capacity_A, capacity_B, target)