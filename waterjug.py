from collections import deque

def water_jug_bfs(capacity_a, capacity_b, target):
    visited = set()


    queue = deque([(0, 0)]) 

    while queue:
        a, b = queue.popleft()

        if a == target or b == target:
            print(f"Solution found: Jug A = {a}, Jug B = {b}")
            return True

    
        if (a, b) in visited:
            continue
        
        
        visited.add((a, b))

    
        next_states = [
            (capacity_a, b), 
            (a, capacity_b),  
            (0, b),  
            (a, 0),
            (a - min(a, capacity_b - b), b + min(a, capacity_b - b)),  
            (a + min(b, capacity_a - a), b - min(b, capacity_a - a))   
        ]

        for state in next_states:
            if state not in visited:
                queue.append(state)

    print("No solution found.")
    return False

water_jug_bfs(4, 3, 2)
